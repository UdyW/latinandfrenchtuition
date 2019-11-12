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
                                            <a href="{{Storage::url($doc->path)}}" target="_blank">
                                                <h6 class="white-text">{{$doc->name}}</h6>
                                                {{--<p  class="white-text"><i>{{$doc->description}}</i></p>--}}
                                            </a>
                                        </div>

                                @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>

                @endforeach
                    </div>
            </div>
        </div>
    </section>
@endsection
