<nav id="top-nav" class="lb-border">
    <div id="nav-cont" class="st-width">
        <div id="social-media">
            <ul>
                <li>
                    <a id="fb"><img src="img/facebook-f.png" height="28" alt="facebook logo" /></a>
                </li>
                <li>
                    <a id="tw"><img src="img/twitter-bird.png" height="23" alt="twitter logo" /></a>
                </li>
                <li>
                    <a id="li"><img src="img/linkedin-in.png" height="28" alt="linkedin logo" /></a>
                </li>
                <li>
                    <a id="ema"><img src="img/email.png" height ="20" alt="email icon" /></a>
                </li>
            </ul>
        </div>
        <div id="internal-nav">
            <ul>
                <li>
                    <h3>
			{{ link_to_route("home",'Home') }}
		    </h3>
                </li>
                <li>
                    <h3>
			{{ link_to_route("about", 'About') }}
		    </h3>
                </li>
                <li>
                    <h3>
			{{ link_to_route("events.index", 'Events') }}
		    </h3>
                </li>
                <li>
                    <h3>
			{{ link_to_route("membership", 'Membership') }}
		    </h3>
                </li>
                <li>
                    <h3>
			{{ link_to_route("contact", 'Contact') }}
		    </h3>
                </li>
            </ul>
        </div>
    </div>
</nav>
