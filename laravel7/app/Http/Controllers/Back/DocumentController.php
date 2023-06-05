<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repositories\DocumentRepository;
use App\Models\Document;
use App\Models\Filiere;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use Illuminate\Validation\Rule;

class DocumentController extends Controller
{

    public function __construct(DocumentRepository $documentRepository)
    {
        $this->DocumentRepository = $documentRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = $this->DocumentRepository->all();
        $filieres = Filiere::all();
        return view('back.tables.documents.index', compact('documents', 'filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocumentRequest $request)
    {
        $document = Document::create($request->only(['titre', 'user_id', 'filiere_id', 'description_courte', 'resume']));

        $id = $document->id;

        $pdfName = $id . '_pdf.pdf';
        $preuveName = $id . '_preuve.png';
        $wordName = $id . '_doc.doc';
        $thumballName = $id . '_thumball.png';

        \DB::table('documents')
            ->where('id', $id)
            ->update(['pdf' => $pdfName, 'preuve' => $preuveName, 'doc' => $wordName, 'thumball' => $thumballName,]);

        $pdf = $request->file('pdf');
        $preuve = $request->file('preuve');
        $word = $request->file('doc');
        $thumball = $request->file('thumball');
        $filePath = 'uploads/';

        $path = \Storage::disk('public')->put($filePath . $pdfName, file_get_contents($pdf));
        $path2 = \Storage::disk('public')->put($filePath . $preuveName, file_get_contents($preuve));
        $path3 = \Storage::disk('public')->put($filePath . $wordName, file_get_contents($word));
        $path4 = \Storage::disk('public')->put($filePath . $thumballName, file_get_contents($thumball));

        \Storage::disk('public')->url($path);
        \Storage::disk('public')->url($path2);
        \Storage::disk('public')->url($path3);
        \Storage::disk('public')->url($path4);


        // Notification view
        notify()->success(__('alerts.success_save'), __('alerts.success_title'));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        $onedocument = $this->DocumentRepository->one($document);
        $filieres = Filiere::all();
        return view('back.forms.documents.show', compact('onedocument', 'filieres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Document $document
     * @return \Illuminate\Http\Response
     */
    public function edit($document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocumentRequest  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $validation = $request->validated();

        $request->merge([
            'password' => \Hash::make($request->password),
        ]);

        $document->update($request->except('_token'));

        // Notification view
        notify()->success(__('alerts.success_save'), __('alerts.success_title'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Document $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Document $document)
    {
        $update = \DB::table('documents')
            ->where('id', $document->id)
            ->update($request->only('status'));

        // Notification view
        notify()->success(__('alerts.success_update'), __('alerts.success_title'));

        return redirect()->back();
    }


    /**
     * search the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function ajaxSearchDocument(Request $request)
    {

        $documents = \DB::table('documents')
            ->where('titre', 'LIKE', '%' . $request->search . '%')
            ->where('status', 'valide')
            ->get();

        return json_encode($documents);

    }


}