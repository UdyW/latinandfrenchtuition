@extends('layouts.template', ['class' => '', 'activePage' => 'resources', 'title' => __('Niovi\'s Dashboard')])

@section('content')
    <section class="faqs">
        <div class="container">
            <h2 class="text-center pb-5">Resources</h2>
            <div id="accordion">
                <?php $i=0 ?>
                    <div class="row">
                @foreach(\App\DocumentCategory::all() as $cat)

                    <div class="column-card">
                        <div class="card-header doc-category" id="heading{{$i}}">
                            <h5 class="mb-0 catname">
                                {{--<button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">--}}
                                    <span>{{$cat->name}}</span>
                                {{--</button>--}}
                            </h5>
                        </div>
                        @foreach(\App\DocumentSubCategory::where('category_id',$cat->id)->get() as $subcat)
                            <?php $i++ ?>
                            <div class="card-header @if($i%2 == 0)light-gray @else dark-gray @endif  @if($loop->last) last-subcategory @endif" id="heading{{$i}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link white-text collapsed" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="false">
                                        <span>{{$subcat->name}}</span>
                                    </button>
                                </h5>
                                <div id="collapse{{$i}}" class="collapse doc-list" aria-labelledby="heading{{$i}}" data-parent="#accordion">
                                @foreach(\App\Document::where('subcategory_id',$subcat->id)->get() as $doc)

                                        <div class="card-body border-bottom">
                                            {{--<a href="{{Storage::url($doc->path)}}" target="_blank">--}}
                                            @if($doc->protected)
                                            <div class="row">
                                                <div class="col-8">
                                                        <h6 class="white-text">{{$doc->name}}</h6>
                                                        {{--<p  class="white-text"><i>{{$doc->description}}</i></p>--}}
                                                </div>

                                                <div class="col-4">
                                            <!-- Link to open the modal -->
                                                    <button type="button" class="btn btn-primary btn-unlock" id="myBtn" data-doc-id="{{$doc->id}}">Unlock</button>
                                                {{--<p><a href="#unlock-modal" rel="modal:open" data-doc-id="{{$doc->id}}">Open Modal</a></p>--}}
                                                </div>
                                            </div>
                                            @else
                                                    <a href="/open-document/{{$doc->id}}" target="_blank">
                                                        <h6 class="white-text">{{$doc->name}}</h6>
                                                        {{--<p  class="white-text"><i>{{$doc->description}}</i></p>--}}
                                                    </a>
                                            @endif
                                        </div>

                                @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>

                @endforeach
                    </div>
            </div>
            <!-- Modal HTML embedded directly into document -->
            <div id="forgot-dialog" style="display:none;" title="Reset your password">
                {{--<form role="form" action="{{route('unlock')}}" method="post">--}}
                    {{--@csrf--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="hidden" id="docId" name="docId" value=""/>--}}
                        {{--<input type="text" class="form-control" name="code" placeholder="Unlock code">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn orange"><span class="glyphicon glyphicon-off"></span> Unlock</button>--}}
                {{--</form>--}}
            </div>
        </div>
    </section>
    {{--<button id="opener">open the dialog</button>--}}
    <div id="dialog" title="Unlock Document">
        <form role="form" action="{{route('unlock')}}" method="post">
            @csrf
            {{--<div class="form-group">--}}
            <input type="hidden" id="docId" name="docId" value=""/>
            <input type="text" class="form-control" name="code" placeholder="Unlock code">
            <input type="submit" value="Unlock">
            {{--</div>--}}
            {{--<button type="submit" class="btn orange"><span class="glyphicon glyphicon-off"></span> Unlock</button>--}}
        </form>
    </div>

    <script>
        $( "#dialog" ).dialog({ autoOpen: false, dialogClass: 'no-close success-dialog' });
        $( ".btn-unlock" ).click(function() {
            $( "#dialog" ).dialog( "open" );
            console.log('doc id: '+event.target.getAttribute('data-doc-id'));
            $("#docId").val(event.target.getAttribute('data-doc-id'));
        });
        // $(  "#dialog" ).on( "dialogopen", function( event, ui ) {
        //     alert($("#docId").val());
        // } );
    </script>
@endsection
