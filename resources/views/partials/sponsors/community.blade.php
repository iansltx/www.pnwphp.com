<div class="4u 12u(medium)" style="float:left; padding: 5px;">

    <!-- Box -->
    <a href="{{ $sponsor->website }}" title="{{ $sponsor->desc }}" class="feature-link" target="_blank" rel="noopener noreferrer">
        <!--<section class="feature-horizontal" style="max-width: 20em; margin-left: auto; margin-right: auto;">-->
        <section class="feature box" style="max-width: 9em; margin-left: auto; margin-right: auto;">
            <img src="{{ asset('storage/'.$sponsor->image) }}" alt="" class="image" />
            <!--<div>
                {{ $sponsor->name }}
            </div>-->
        </section>
    </a>

</div>