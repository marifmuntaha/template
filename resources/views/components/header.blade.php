
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-lg-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{$page}}</span> - {{$appname}}</h4>
            <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-light header-elements-sm-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                @if($breadcrumb != null)
                    @for($i=0;$i<count($breadcrumb);$i++)
                        @if($breadcrumb[$i]->page == $page)
                            @if(isset($breadcrumb[$i]->icon))
                                <span class="breadcrumb-item active"><i class="{{$breadcrumb[$i]->icon}} mr-2"></i> {{$breadcrumb[$i]->page}}</span>
                            @else
                                <span class="breadcrumb-item active">{{$breadcrumb[$i]->page}}</span>
                            @endif
                        @else
                            @if(isset($breadcrumb[$i]->icon))
                                <a href="{{$breadcrumb[$i]->link}}" class="breadcrumb-item"><i class="{{$breadcrumb[$i]->icon}} mr-2"></i> {{$breadcrumb[$i]->page}}</a>
                            @else
                                <a href="{{$breadcrumb[$i]->link}}" class="breadcrumb-item">{{$breadcrumb[$i]->page}}</a>
                            @endif
                        @endif
                    @endfor
                @endif
            </div>
            <a href="#" class="header-elements-toggle text-body d-sm-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
