<div class="entry col-md-6">
    <div class="grid-inner row align-items-center">
        <div class="col-lg-6">
            <div class="entry-image mb-0">
                <a href="{{ route('get_post', ['category' => $post['category_slug'], 'slug' => $post['slug']]) }}"><img src="/storage/{{ $post['image'] }}" alt="Paris"></a>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0">
            <span class="before-heading">{{ $post['category_name'] }}</span>
            <div class="entry-title title-xs nott">
                <h3><a href="{{ route('get_post', ['category' => $post['category_slug'], 'slug' => $post['slug']]) }}">{{ $post['title'] }}</a></h3>
            </div>
            <div class="entry-meta">
                <ul>
                    <li><i class="icon-calendar3"></i> {{ date('d-m-Y', strtotime( $post['created_at'])) }}</li>
                    <li><a href="{{ route('get_post', ['category' => $post['category_slug'], 'slug' => $post['slug']]) }}"><i class="icon-comments"></i> 05</a></li>
                </ul>
            </div>
            <div class="entry-content">
                <a href="{{ route('get_post', ['category' => $post['category_slug'], 'slug' => $post['slug']]) }}" class="more-link">Прочитать</a>
            </div>
        </div>
    </div>
</div>