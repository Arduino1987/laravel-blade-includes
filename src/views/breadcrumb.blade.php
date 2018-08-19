<ol class="breadcrumb">

    <li class="breadcrumb-item">{{ __('Home') }}</li>

    @foreach($items as $title => $href)

        <li class="breadcrumb-item">

            @if($loop->last)
                {{ str_limit($title, 64) }}
            @else
                <a href="{{ $href }}">
                    {{ str_limit($title, 64) }}
                </a>
            @endif

        </li>

    @endforeach

    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn" href="#">
                <i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#">
                <i class="icon-settings"></i> &nbsp;Settings</a>
        </div>
    </li>
</ol>