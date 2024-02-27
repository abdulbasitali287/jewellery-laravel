@extends('layouts.admin')
@push('styles')
    <style>
        #container {
            min-width: 100px;
            margin: 20px auto;
        }

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
@endpush
@section('main-content')
    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Page</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('page.store') }}" method="POST">
                            @csrf
                            <div class="card-body" id="inputContainer">
                                <div class="form-group inputField">
                                    <label>Option</label>
                                    <div class="d-flex original_input">
                                        <input type="text" class="form-control" name="options[]"
                                            placeholder="Options...">
                                    </div>
                                    @error('options.*')
                                        <span class="text-danger py-20">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group inputField">
                                    <label>Key</label>
                                    <div class="d-flex original_input">
                                        <input type="text" class="form-control" name="key[]" placeholder="Key...">
                                    </div>
                                    @error('key.*')
                                        <span class="text-danger py-20">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group inputField">
                                    <div id="container">
                                        <textarea class="form-control" id="editor" placeholder="Enter the Description" rows="5" name="value[]"></textarea>
                                    </div>
                                    {{-- <label>Value</label>
                                        <div class="d-flex original_input">
                                            <textarea name="value[]" class="" id="valueEditor" ></textarea>
                                    </div>
                                     --}}
                                    @error('value.*')
                                    <span class="text-danger py-20">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="d-flex justify-content-end">
                                <button class="cloneInput btn btn-sm btn-success mx-4">Add more</button>
                            </div> --}}
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>
    <script>
        // ClassicEditor
        //     .create(document.querySelector('#valueEditor'))
        //     .catch(error => {
        //         console.error(error);
        //     });
        loadCkEditor();
        function loadCkEditor(){
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },

            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    // {
                    //     model: 'heading4',
                    //     view: 'h4',
                    //     title: 'Heading 4',
                    //     class: 'ck-heading_heading4'
                    // },
                    // {
                    //     model: 'heading5',
                    //     view: 'h5',
                    //     title: 'Heading 5',
                    //     class: 'ck-heading_heading5'
                    // },
                    // {
                    //     model: 'heading6',
                    //     view: 'h6',
                    //     title: 'Heading 6',
                    //     class: 'ck-heading_heading6'
                    // }
                ]
            },

            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'AIAssistant',
                'CKBox',
                'CKFinder',
                'EasyImage',

                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType',
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents',
                'PasteFromOfficeEnhanced'
            ]
        });
        }


        // $(document).ready(function() {
        //     $(document).on('click', '.cloneInput', function(e) {
        //         e.preventDefault();
        //         // $(this).each(function() {
        //         let cloneDiv = $(this).closest('form').find('.card-body').last();
        //         let $options = cloneDiv.find("input[name='options[]']").val();
        //         let $value = cloneDiv.find("input[name='key[]']").val();
        //         let $key = cloneDiv.find("input[name='value[]']").val();
        //         if ($options !== "" && $key !== "" && $value !== "") {
        //             let $clonedDiv = cloneDiv.clone();
        //             $clonedDiv.find('input').val('');
        //             $clonedDiv.find('.ck-restricted-editing_mode_standard').html("");
        //             cloneDiv.after($clonedDiv);
        //         }
        //         // });
        //     });
        // });
    </script>
@endsection
