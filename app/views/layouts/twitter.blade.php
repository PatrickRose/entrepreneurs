<div id="dem-tweets">
    <h4>Latest Tweets</h4>
    @foreach (Twitter::getUserTimeline(array('screen_name' => '_SEntrepreneurs', 'count' => 5)) as $tweet)
        <div class="a-tweet">
            <div class="tweet-pic">
                <img src='{{ $tweet->user->profile_image_url }}'
		     width=50 height=50/>
            </div>
            <div class="tweet-content">
                <div class="tweet-text">
                    <p>
                        {{ Twitter::linkify($tweet->text) }}
                    </p>
                </div>
                <div class='tweet-info'>
                    {{ Twitter::ago($tweet->created_at); }}, posted via {{ $tweet->source }}
                </div>
            </div>
        </div>
    @endforeach
</div>
