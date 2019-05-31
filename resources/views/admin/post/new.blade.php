@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                
                <div class="card shadow">
                    <div class="card-header border-0">
                        

                         <textarea class="form-control" id="editor"></textarea>



                    </div>
                </div>
            </div> 
        </div>
        
      <!--   @include('admin.layouts.footers.auth') -->
    </div>
@endsection

@push('js')
    
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- SimpleMDE -->
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        // Most options demonstrate the non-default behavior
        var simplemde = new SimpleMDE({
            autofocus: true,
            autosave: {
                enabled: true,
                uniqueId: "MyUniqueID",
                delay: 1000,
            },
            element: document.getElementById("editor"),
            forceSync: true,
            lineWrapping: false,
            placeholder: "Type here...",
            promptURLs: true,
            renderingConfig: {
                singleLineBreaks: false,
                codeSyntaxHighlighting: true,
            },
            shortcuts: {
                drawTable: "Cmd-Alt-T"
            },
            spellChecker: true,
            tabSize: 4,
            });

        //$('#editor').wrapInner(simplemde.options.previewRender(simplemde.value()));
    </script>

@endpush