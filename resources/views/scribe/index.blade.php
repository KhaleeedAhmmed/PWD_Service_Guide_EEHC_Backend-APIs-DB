<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Basmety Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.8.0.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://basmety.test";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.8.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: October 28 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://basmety.test</code></pre>

        <h1>Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting <b>Login API</b>.</br>All APIs <b>Must</b> have version Header <b>Api-Version:v1</b>.</br>All APIs <b>May</b> have locale Header <b>Api-Locale:ar</b>.</p>

        <h1 id="contact-info">Contact Info</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs Contact Info</p>

            <h2 id="contact-info-GETapi-v1-contactus-all">Fetch all Contact Info.</h2>

<p>
</p>

<p>an API which Offers a mean to fetch all Contact Info.</p>

<span id="example-requests-GETapi-v1-contactus-all">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/contactus/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/contactus/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-contactus-all">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-contactus-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-contactus-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-contactus-all"></code></pre>
</span>
<span id="execution-error-GETapi-v1-contactus-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-contactus-all"></code></pre>
</span>
<form id="form-GETapi-v1-contactus-all" data-method="GET"
      data-path="api/v1/contactus/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-contactus-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-contactus-all"
                    onclick="tryItOut('GETapi-v1-contactus-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-contactus-all"
                    onclick="cancelTryOut('GETapi-v1-contactus-all');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-contactus-all" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/contactus/all</code></b>
        </p>
                    </form>

        <h1 id="contact-messages">Contact Messages</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs Contact Messages</p>

            <h2 id="contact-messages-POSTapi-v1-contactus-store">Store user Message to database.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Store user Message to database.</p>

<span id="example-requests-POSTapi-v1-contactus-store">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/contactus/store" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"name\": \"Fahmi Moustafa\",
    \"email\": \"user@company.com\",
    \"mobile_field\": \"999988866\",
    \"message\": \"My Message\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/contactus/store"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "name": "Fahmi Moustafa",
    "email": "user@company.com",
    "mobile_field": "999988866",
    "message": "My Message"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-contactus-store">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-contactus-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-contactus-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-contactus-store"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-contactus-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-contactus-store"></code></pre>
</span>
<form id="form-POSTapi-v1-contactus-store" data-method="POST"
      data-path="api/v1/contactus/store"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-contactus-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-contactus-store"
                    onclick="tryItOut('POSTapi-v1-contactus-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-contactus-store"
                    onclick="cancelTryOut('POSTapi-v1-contactus-store');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-contactus-store" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/contactus/store</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-contactus-store" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-contactus-store"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-contactus-store"
               data-component="body" required  hidden>
    <br>
<p>user name.</p>        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-contactus-store"
               data-component="body" required  hidden>
    <br>
<p>the user E-Mail address.</p>        </p>
                <p>
            <b><code>mobile_field</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="mobile_field"
               data-endpoint="POSTapi-v1-contactus-store"
               data-component="body" required  hidden>
    <br>
<p>user mobile number.</p>        </p>
                <p>
            <b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="message"
               data-endpoint="POSTapi-v1-contactus-store"
               data-component="body" required  hidden>
    <br>
<p>user Message.</p>        </p>
    
    </form>

        <h1 id="countries">Countries</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for Countries</p>

            <h2 id="countries-GETapi-v1-country-search">All Countries.</h2>

<p>
</p>

<p>an API which Offers a mean to fetch all Countries.</p>

<span id="example-requests-GETapi-v1-country-search">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/country/search?country=2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/country/search"
);

const params = {
    "country": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-country-search">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-country-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-country-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-country-search"></code></pre>
</span>
<span id="execution-error-GETapi-v1-country-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-country-search"></code></pre>
</span>
<form id="form-GETapi-v1-country-search" data-method="GET"
      data-path="api/v1/country/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-country-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-country-search"
                    onclick="tryItOut('GETapi-v1-country-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-country-search"
                    onclick="cancelTryOut('GETapi-v1-country-search');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-country-search" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/country/search</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>country</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="country"
               data-endpoint="GETapi-v1-country-search"
               data-component="query"  hidden>
    <br>
<p>Country id exmp 2 for UAE.</p>            </p>
                </form>

        <h1 id="home-management">Home Management</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for managing App Home data</p>

            <h2 id="home-management-GETapi-v1-home-home">List Home data.</h2>

<p>
</p>

<p>an API which Offers a mean to List Home data.</p>

<span id="example-requests-GETapi-v1-home-home">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/home/home?city=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/home/home"
);

const params = {
    "city": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-home-home">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-home-home" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-home-home"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-home-home"></code></pre>
</span>
<span id="execution-error-GETapi-v1-home-home" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-home-home"></code></pre>
</span>
<form id="form-GETapi-v1-home-home" data-method="GET"
      data-path="api/v1/home/home"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-home-home', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-home-home"
                    onclick="tryItOut('GETapi-v1-home-home');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-home-home"
                    onclick="cancelTryOut('GETapi-v1-home-home');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-home-home" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/home/home</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="city"
               data-endpoint="GETapi-v1-home-home"
               data-component="query" required  hidden>
    <br>
<p>city id.</p>            </p>
                </form>

        <h1 id="main-categories">Main Categories</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for managing App Main Categories</p>

            <h2 id="main-categories-GETapi-v1-categories-search">List App Main Categories.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to list App Main Categories.</p>

<span id="example-requests-GETapi-v1-categories-search">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/categories/search?search=Salon&amp;category=1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/categories/search"
);

const params = {
    "search": "Salon",
    "category": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-categories-search">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-categories-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-categories-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories-search"></code></pre>
</span>
<span id="execution-error-GETapi-v1-categories-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories-search"></code></pre>
</span>
<form id="form-GETapi-v1-categories-search" data-method="GET"
      data-path="api/v1/categories/search"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-categories-search"
                    onclick="tryItOut('GETapi-v1-categories-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-categories-search"
                    onclick="cancelTryOut('GETapi-v1-categories-search');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-categories-search" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/categories/search</code></b>
        </p>
                <p>
            <label id="auth-GETapi-v1-categories-search" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-v1-categories-search"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="search"
               data-endpoint="GETapi-v1-categories-search"
               data-component="query"  hidden>
    <br>
<p>(optional) search word.</p>            </p>
                    <p>
                <b><code>category</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="category"
               data-endpoint="GETapi-v1-categories-search"
               data-component="query"  hidden>
    <br>
<p>(optional) category id.</p>            </p>
                </form>

        <h1 id="nationalities">Nationalities</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for Nationalities</p>

            <h2 id="nationalities-GETapi-v1-nationality-search">Search All Nationalities.</h2>

<p>
</p>

<p>an API which Offers a mean to fetch all Nationalities.</p>

<span id="example-requests-GETapi-v1-nationality-search">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/nationality/search?nationality=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/nationality/search"
);

const params = {
    "nationality": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-nationality-search">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-nationality-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-nationality-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-nationality-search"></code></pre>
</span>
<span id="execution-error-GETapi-v1-nationality-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-nationality-search"></code></pre>
</span>
<form id="form-GETapi-v1-nationality-search" data-method="GET"
      data-path="api/v1/nationality/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-nationality-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-nationality-search"
                    onclick="tryItOut('GETapi-v1-nationality-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-nationality-search"
                    onclick="cancelTryOut('GETapi-v1-nationality-search');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-nationality-search" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/nationality/search</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>nationality</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="nationality"
               data-endpoint="GETapi-v1-nationality-search"
               data-component="query"  hidden>
    <br>
<p>Nationality id.</p>            </p>
                </form>

        <h1 id="offers-management">Offers Management</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for managing Offers data</p>

            <h2 id="offers-management-GETapi-v1-offer-list">List Offer data.</h2>

<p>
</p>

<p>an API which Offers a mean to List Offer data.</p>

<span id="example-requests-GETapi-v1-offer-list">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/offer/list?city=1&amp;category=1&amp;items=10&amp;page=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/offer/list"
);

const params = {
    "city": "1",
    "category": "1",
    "items": "10",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-offer-list">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-offer-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-offer-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-offer-list"></code></pre>
</span>
<span id="execution-error-GETapi-v1-offer-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-offer-list"></code></pre>
</span>
<form id="form-GETapi-v1-offer-list" data-method="GET"
      data-path="api/v1/offer/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-offer-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-offer-list"
                    onclick="tryItOut('GETapi-v1-offer-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-offer-list"
                    onclick="cancelTryOut('GETapi-v1-offer-list');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-offer-list" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/offer/list</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="city"
               data-endpoint="GETapi-v1-offer-list"
               data-component="query" required  hidden>
    <br>
<p>city id.</p>            </p>
                    <p>
                <b><code>category</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="category"
               data-endpoint="GETapi-v1-offer-list"
               data-component="query"  hidden>
    <br>
<p>(optional) Shop Category id.</p>            </p>
                    <p>
                <b><code>items</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="items"
               data-endpoint="GETapi-v1-offer-list"
               data-component="query"  hidden>
    <br>
<p>(optional) items per page.</p>            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-v1-offer-list"
               data-component="query"  hidden>
    <br>
<p>(optional) number of desired page.</p>            </p>
                </form>

            <h2 id="offers-management-GETapi-v1-offer-categories">List Offer Categories data.</h2>

<p>
</p>

<p>an API which Offers a mean to List Offer Categories data.</p>

<span id="example-requests-GETapi-v1-offer-categories">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/offer/categories?city=1&amp;items=10&amp;page=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/offer/categories"
);

const params = {
    "city": "1",
    "items": "10",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-offer-categories">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-offer-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-offer-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-offer-categories"></code></pre>
</span>
<span id="execution-error-GETapi-v1-offer-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-offer-categories"></code></pre>
</span>
<form id="form-GETapi-v1-offer-categories" data-method="GET"
      data-path="api/v1/offer/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-offer-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-offer-categories"
                    onclick="tryItOut('GETapi-v1-offer-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-offer-categories"
                    onclick="cancelTryOut('GETapi-v1-offer-categories');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-offer-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/offer/categories</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="city"
               data-endpoint="GETapi-v1-offer-categories"
               data-component="query" required  hidden>
    <br>
<p>city id.</p>            </p>
                    <p>
                <b><code>items</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="items"
               data-endpoint="GETapi-v1-offer-categories"
               data-component="query"  hidden>
    <br>
<p>(optional) items per page.</p>            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-v1-offer-categories"
               data-component="query"  hidden>
    <br>
<p>(optional) number of desired page.</p>            </p>
                </form>

        <h1 id="shop-favourite-management">Shop Favourite Management</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for managing Shop Favourite</p>

            <h2 id="shop-favourite-management-GETapi-v1-shopfavourites-list">List Shops in Favourite.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to List Shops in Favourite.</p>

<span id="example-requests-GETapi-v1-shopfavourites-list">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/shopfavourites/list?items=10&amp;page=1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/shopfavourites/list"
);

const params = {
    "items": "10",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-shopfavourites-list">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-shopfavourites-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-shopfavourites-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-shopfavourites-list"></code></pre>
</span>
<span id="execution-error-GETapi-v1-shopfavourites-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-shopfavourites-list"></code></pre>
</span>
<form id="form-GETapi-v1-shopfavourites-list" data-method="GET"
      data-path="api/v1/shopfavourites/list"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-shopfavourites-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-shopfavourites-list"
                    onclick="tryItOut('GETapi-v1-shopfavourites-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-shopfavourites-list"
                    onclick="cancelTryOut('GETapi-v1-shopfavourites-list');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-shopfavourites-list" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/shopfavourites/list</code></b>
        </p>
                <p>
            <label id="auth-GETapi-v1-shopfavourites-list" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-v1-shopfavourites-list"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>items</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="items"
               data-endpoint="GETapi-v1-shopfavourites-list"
               data-component="query"  hidden>
    <br>
<p>(optional) items per page.</p>            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-v1-shopfavourites-list"
               data-component="query"  hidden>
    <br>
<p>(optional) number of desired page.</p>            </p>
                </form>

            <h2 id="shop-favourite-management-POSTapi-v1-shopfavourites-add">Add Shop to Favourite.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Add Shop to Favourite.</p>

<span id="example-requests-POSTapi-v1-shopfavourites-add">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/shopfavourites/add" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"shop\": 1
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/shopfavourites/add"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "shop": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-shopfavourites-add">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-shopfavourites-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-shopfavourites-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-shopfavourites-add"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-shopfavourites-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-shopfavourites-add"></code></pre>
</span>
<form id="form-POSTapi-v1-shopfavourites-add" data-method="POST"
      data-path="api/v1/shopfavourites/add"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-shopfavourites-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-shopfavourites-add"
                    onclick="tryItOut('POSTapi-v1-shopfavourites-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-shopfavourites-add"
                    onclick="cancelTryOut('POSTapi-v1-shopfavourites-add');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-shopfavourites-add" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/shopfavourites/add</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-shopfavourites-add" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-shopfavourites-add"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>shop</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="shop"
               data-endpoint="POSTapi-v1-shopfavourites-add"
               data-component="body" required  hidden>
    <br>
<p>shop id.</p>        </p>
    
    </form>

            <h2 id="shop-favourite-management-POSTapi-v1-shopfavourites-remove">Remove Shop from Favourite.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Remove Shop from Favourite.</p>

<span id="example-requests-POSTapi-v1-shopfavourites-remove">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/shopfavourites/remove" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"shop\": 1
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/shopfavourites/remove"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "shop": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-shopfavourites-remove">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-shopfavourites-remove" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-shopfavourites-remove"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-shopfavourites-remove"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-shopfavourites-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-shopfavourites-remove"></code></pre>
</span>
<form id="form-POSTapi-v1-shopfavourites-remove" data-method="POST"
      data-path="api/v1/shopfavourites/remove"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-shopfavourites-remove', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-shopfavourites-remove"
                    onclick="tryItOut('POSTapi-v1-shopfavourites-remove');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-shopfavourites-remove"
                    onclick="cancelTryOut('POSTapi-v1-shopfavourites-remove');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-shopfavourites-remove" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/shopfavourites/remove</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-shopfavourites-remove" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-shopfavourites-remove"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>shop</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="shop"
               data-endpoint="POSTapi-v1-shopfavourites-remove"
               data-component="body" required  hidden>
    <br>
<p>shop id.</p>        </p>
    
    </form>

        <h1 id="shop-management">Shop Management</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for managing Shop data</p>

            <h2 id="shop-management-GETapi-v1-shop-details">Shop Details.</h2>

<p>
</p>

<p>an API which shops a mean to find Shop details.</p>

<span id="example-requests-GETapi-v1-shop-details">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/shop/details?city=1&amp;shop=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/shop/details"
);

const params = {
    "city": "1",
    "shop": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-shop-details">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-shop-details" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-shop-details"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-shop-details"></code></pre>
</span>
<span id="execution-error-GETapi-v1-shop-details" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-shop-details"></code></pre>
</span>
<form id="form-GETapi-v1-shop-details" data-method="GET"
      data-path="api/v1/shop/details"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-shop-details', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-shop-details"
                    onclick="tryItOut('GETapi-v1-shop-details');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-shop-details"
                    onclick="cancelTryOut('GETapi-v1-shop-details');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-shop-details" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/shop/details</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="city"
               data-endpoint="GETapi-v1-shop-details"
               data-component="query" required  hidden>
    <br>
<p>city id.</p>            </p>
                    <p>
                <b><code>shop</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="shop"
               data-endpoint="GETapi-v1-shop-details"
               data-component="query" required  hidden>
    <br>
<p>shop id.</p>            </p>
                </form>

            <h2 id="shop-management-GETapi-v1-shop-list">List Shops data.</h2>

<p>
</p>

<p>an API which shops a mean to List Shops data.</p>

<span id="example-requests-GETapi-v1-shop-list">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/shop/list?city=1&amp;category=1&amp;items=10&amp;page=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/shop/list"
);

const params = {
    "city": "1",
    "category": "1",
    "items": "10",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-shop-list">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-shop-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-shop-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-shop-list"></code></pre>
</span>
<span id="execution-error-GETapi-v1-shop-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-shop-list"></code></pre>
</span>
<form id="form-GETapi-v1-shop-list" data-method="GET"
      data-path="api/v1/shop/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-shop-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-shop-list"
                    onclick="tryItOut('GETapi-v1-shop-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-shop-list"
                    onclick="cancelTryOut('GETapi-v1-shop-list');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-shop-list" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/shop/list</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="city"
               data-endpoint="GETapi-v1-shop-list"
               data-component="query" required  hidden>
    <br>
<p>city id.</p>            </p>
                    <p>
                <b><code>category</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="category"
               data-endpoint="GETapi-v1-shop-list"
               data-component="query" required  hidden>
    <br>
<p>Shop Category id.</p>            </p>
                    <p>
                <b><code>items</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="items"
               data-endpoint="GETapi-v1-shop-list"
               data-component="query"  hidden>
    <br>
<p>(optional) items per page.</p>            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-v1-shop-list"
               data-component="query"  hidden>
    <br>
<p>(optional) number of desired page.</p>            </p>
                </form>

        <h1 id="user-management">User Management</h1>

    <aside class="notice">Author Fahmi Moustafa</aside>
<p>APIs for managing Users</p>

            <h2 id="user-management-POSTapi-v1-user-auth-login">Login user.</h2>

<p>
</p>

<p>an API which Offers a mean to login a user</p>

<span id="example-requests-POSTapi-v1-user-auth-login">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"email\": \"user@company.com\",
    \"password\": \"Us20er20\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "email": "user@company.com",
    "password": "Us20er20"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-auth-login">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-auth-login"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-auth-login"></code></pre>
</span>
<form id="form-POSTapi-v1-user-auth-login" data-method="POST"
      data-path="api/v1/user/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-auth-login"
                    onclick="tryItOut('POSTapi-v1-user-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-user-auth-login');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-auth-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/auth/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-user-auth-login"
               data-component="body" required  hidden>
    <br>
<p>The E-Mail address of the user. Must be a valid email address.</p>        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-user-auth-login"
               data-component="body" required  hidden>
    <br>
<p>The password of User account.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-auth-verification-url">Send Email Verification.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to send verification link to user email if not verified.</p>

<span id="example-requests-POSTapi-v1-user-auth-verification-url">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/auth/verification-url" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/auth/verification-url"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-auth-verification-url">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-auth-verification-url" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-auth-verification-url"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-auth-verification-url"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-auth-verification-url" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-auth-verification-url"></code></pre>
</span>
<form id="form-POSTapi-v1-user-auth-verification-url" data-method="POST"
      data-path="api/v1/user/auth/verification-url"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-auth-verification-url', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-auth-verification-url"
                    onclick="tryItOut('POSTapi-v1-user-auth-verification-url');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-auth-verification-url"
                    onclick="cancelTryOut('POSTapi-v1-user-auth-verification-url');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-auth-verification-url" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/auth/verification-url</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-auth-verification-url" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-auth-verification-url"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="user-management-POSTapi-v1-user-auth-forget">Forget Password user.</h2>

<p>
</p>

<p>an API which Offers a mean to request reset password for logged out users.</p>

<span id="example-requests-POSTapi-v1-user-auth-forget">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/auth/forget" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"email\": \"user@gmail.com\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/auth/forget"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "email": "user@gmail.com"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-auth-forget">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-auth-forget" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-auth-forget"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-auth-forget"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-auth-forget" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-auth-forget"></code></pre>
</span>
<form id="form-POSTapi-v1-user-auth-forget" data-method="POST"
      data-path="api/v1/user/auth/forget"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-auth-forget', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-auth-forget"
                    onclick="tryItOut('POSTapi-v1-user-auth-forget');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-auth-forget"
                    onclick="cancelTryOut('POSTapi-v1-user-auth-forget');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-auth-forget" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/auth/forget</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-user-auth-forget"
               data-component="body" required  hidden>
    <br>
<p>user E-Mail Address.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-auth-change">Change Password user.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to reset password for logged in users.</p>

<span id="example-requests-POSTapi-v1-user-auth-change">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/auth/change" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"old_password\": \"User2020\",
    \"password\": \"Us20er20\",
    \"password_confirmation\": \"Us20er20\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/auth/change"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "old_password": "User2020",
    "password": "Us20er20",
    "password_confirmation": "Us20er20"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-auth-change">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-auth-change" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-auth-change"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-auth-change"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-auth-change" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-auth-change"></code></pre>
</span>
<form id="form-POSTapi-v1-user-auth-change" data-method="POST"
      data-path="api/v1/user/auth/change"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-auth-change', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-auth-change"
                    onclick="tryItOut('POSTapi-v1-user-auth-change');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-auth-change"
                    onclick="cancelTryOut('POSTapi-v1-user-auth-change');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-auth-change" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/auth/change</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-auth-change" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-auth-change"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>old_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="old_password"
               data-endpoint="POSTapi-v1-user-auth-change"
               data-component="body" required  hidden>
    <br>
<p>length [8:20] must have 1 number 1 Capital Letter 1 Small Letter The user old password.</p>        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-user-auth-change"
               data-component="body" required  hidden>
    <br>
<p>length [8:20] must have 1 number 1 Capital Letter 1 Small Letter The user new password.</p>        </p>
                <p>
            <b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password_confirmation"
               data-endpoint="POSTapi-v1-user-auth-change"
               data-component="body" required  hidden>
    <br>
<p>length [8:20] must have 1 number 1 Capital Letter 1 Small Letter The user new password confirmation.</p>        </p>
    
    </form>

            <h2 id="user-management-GETapi-v1-user-auth-logout">Logout user.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to logout a user.</p>

<span id="example-requests-GETapi-v1-user-auth-logout">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/user/auth/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/auth/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-user-auth-logout">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-auth-logout"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-auth-logout"></code></pre>
</span>
<form id="form-GETapi-v1-user-auth-logout" data-method="GET"
      data-path="api/v1/user/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user-auth-logout"
                    onclick="tryItOut('GETapi-v1-user-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user-auth-logout"
                    onclick="cancelTryOut('GETapi-v1-user-auth-logout');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user-auth-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user/auth/logout</code></b>
        </p>
                <p>
            <label id="auth-GETapi-v1-user-auth-logout" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-v1-user-auth-logout"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="user-management-GETapi-v1-user-profile">User Profile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to view user data (profile).</p>

<span id="example-requests-GETapi-v1-user-profile">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://basmety.test/api/v1/user/profile" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/profile"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-user-profile">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-profile"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-profile"></code></pre>
</span>
<form id="form-GETapi-v1-user-profile" data-method="GET"
      data-path="api/v1/user/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user-profile"
                    onclick="tryItOut('GETapi-v1-user-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user-profile"
                    onclick="cancelTryOut('GETapi-v1-user-profile');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user/profile</code></b>
        </p>
                <p>
            <label id="auth-GETapi-v1-user-profile" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-v1-user-profile"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="user-management-POSTapi-v1-user-auth-register">Register user.</h2>

<p>
</p>

<p>an API which Offers a mean to register a user.</p>

<span id="example-requests-POSTapi-v1-user-auth-register">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"first_name\": \"Fahmi\",
    \"last_name\": \"Moustafa\",
    \"email\": \"user@company.com\",
    \"gender\": 1,
    \"password\": \"Us20er20\",
    \"UUID\": \"dsf6sd5g5ds6g56sd5g6sd5g6s6a5d6\",
    \"password_confirmation\": \"Us20er20\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "first_name": "Fahmi",
    "last_name": "Moustafa",
    "email": "user@company.com",
    "gender": 1,
    "password": "Us20er20",
    "UUID": "dsf6sd5g5ds6g56sd5g6sd5g6s6a5d6",
    "password_confirmation": "Us20er20"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-auth-register">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-auth-register"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-auth-register"></code></pre>
</span>
<form id="form-POSTapi-v1-user-auth-register" data-method="POST"
      data-path="api/v1/user/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-auth-register"
                    onclick="tryItOut('POSTapi-v1-user-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-auth-register"
                    onclick="cancelTryOut('POSTapi-v1-user-auth-register');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-auth-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/auth/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="POSTapi-v1-user-auth-register"
               data-component="body" required  hidden>
    <br>
<p>user first name.</p>        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-v1-user-auth-register"
               data-component="body" required  hidden>
    <br>
<p>user last name.</p>        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-user-auth-register"
               data-component="body" required  hidden>
    <br>
<p>the user Email address.</p>        </p>
                <p>
            <b><code>gender</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="gender"
               data-endpoint="POSTapi-v1-user-auth-register"
               data-component="body"  hidden>
    <br>
<p>in [1:2] 1 Male 2 Female.</p>        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-user-auth-register"
               data-component="body" required  hidden>
    <br>
<p>length [8:20] user password must have 1 number 1 Capital Letter 1 Small Letter.</p>        </p>
                <p>
            <b><code>UUID</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="UUID"
               data-endpoint="POSTapi-v1-user-auth-register"
               data-component="body"  hidden>
    <br>
<p>user UUID for FireBase Notifications.</p>        </p>
                <p>
            <b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password_confirmation"
               data-endpoint="POSTapi-v1-user-auth-register"
               data-component="body" required  hidden>
    <br>
<p>length [8:20] user password must have 1 number 1 Capital Letter 1 Small Letter.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-profile-edit">Edit user profile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to edit user profile.</p>

<span id="example-requests-POSTapi-v1-user-profile-edit">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/profile/edit" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"first_name\": \"Ali\",
    \"last_name\": \"Basem\",
    \"gender\": 1
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/profile/edit"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "first_name": "Ali",
    "last_name": "Basem",
    "gender": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-profile-edit">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-profile-edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-profile-edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-profile-edit"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-profile-edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-profile-edit"></code></pre>
</span>
<form id="form-POSTapi-v1-user-profile-edit" data-method="POST"
      data-path="api/v1/user/profile/edit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-profile-edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-profile-edit"
                    onclick="tryItOut('POSTapi-v1-user-profile-edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-profile-edit"
                    onclick="cancelTryOut('POSTapi-v1-user-profile-edit');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-profile-edit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/profile/edit</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-profile-edit" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-profile-edit"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="POSTapi-v1-user-profile-edit"
               data-component="body"  hidden>
    <br>
<p>length [1:60] user first name.</p>        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-v1-user-profile-edit"
               data-component="body"  hidden>
    <br>
<p>length [1:60] user last name.</p>        </p>
                <p>
            <b><code>gender</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="gender"
               data-endpoint="POSTapi-v1-user-profile-edit"
               data-component="body"  hidden>
    <br>
<p>in [1:2] 1 Male 2 Female.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-profile-image">Store or Edit Profile Image.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to user profile image.</p>

<span id="example-requests-POSTapi-v1-user-profile-image">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/profile/image" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --form "image=@/tmp/phptTicxv" </code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/profile/image"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-profile-image">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-profile-image" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-profile-image"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-profile-image"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-profile-image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-profile-image"></code></pre>
</span>
<form id="form-POSTapi-v1-user-profile-image" data-method="POST"
      data-path="api/v1/user/profile/image"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-profile-image', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-profile-image"
                    onclick="tryItOut('POSTapi-v1-user-profile-image');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-profile-image"
                    onclick="cancelTryOut('POSTapi-v1-user-profile-image');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-profile-image" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/profile/image</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-profile-image" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-profile-image"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="image"
               data-endpoint="POSTapi-v1-user-profile-image"
               data-component="body" required  hidden>
    <br>
<p>max size 2MB | MIMES jpg,jpeg,png user profile image.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-address-store">Store Address Data.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Store Address Data.</p>

<span id="example-requests-POSTapi-v1-user-address-store">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/address/store" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"address\": \"22 12 325 snew Mosko Rusia\",
    \"longitude\": 42.15254632999999984122041496448218822479248046875,
    \"latitude\": 37.15254632999999984122041496448218822479248046875,
    \"street\": \"snew\",
    \"building\": \"325\",
    \"floor\": \"12\",
    \"apartment\": \"22\",
    \"mobile_field\": \"554147429\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/address/store"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "address": "22 12 325 snew Mosko Rusia",
    "longitude": 42.15254632999999984122041496448218822479248046875,
    "latitude": 37.15254632999999984122041496448218822479248046875,
    "street": "snew",
    "building": "325",
    "floor": "12",
    "apartment": "22",
    "mobile_field": "554147429"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-address-store">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-address-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-address-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-address-store"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-address-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-address-store"></code></pre>
</span>
<form id="form-POSTapi-v1-user-address-store" data-method="POST"
      data-path="api/v1/user/address/store"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-address-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-address-store"
                    onclick="tryItOut('POSTapi-v1-user-address-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-address-store"
                    onclick="cancelTryOut('POSTapi-v1-user-address-store');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-address-store" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/address/store</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-address-store" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-address-store"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body" required  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>longitude</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="longitude"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body" required  hidden>
    <br>
<p>user address longitude value.</p>        </p>
                <p>
            <b><code>latitude</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="latitude"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body" required  hidden>
    <br>
<p>user address latitude value.</p>        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="street"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body" required  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>building</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="building"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body"  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>floor</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="floor"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body"  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>apartment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="apartment"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body"  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>mobile_field</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="mobile_field"
               data-endpoint="POSTapi-v1-user-address-store"
               data-component="body" required  hidden>
    <br>
<p>length UAE mobile number.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-address-edit">Edit Address Data.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Edit Address Data.</p>

<span id="example-requests-POSTapi-v1-user-address-edit">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/address/edit" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"address_id\": 1,
    \"address\": \"22 12 325 snew Mosko Rusia\",
    \"longitude\": 42.15254632999999984122041496448218822479248046875,
    \"latitude\": 37.15254632999999984122041496448218822479248046875,
    \"street\": \"snew\",
    \"building\": \"325\",
    \"floor\": \"12\",
    \"apartment\": \"22\",
    \"mobile_field\": \"554147429\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/address/edit"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "address_id": 1,
    "address": "22 12 325 snew Mosko Rusia",
    "longitude": 42.15254632999999984122041496448218822479248046875,
    "latitude": 37.15254632999999984122041496448218822479248046875,
    "street": "snew",
    "building": "325",
    "floor": "12",
    "apartment": "22",
    "mobile_field": "554147429"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-address-edit">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-address-edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-address-edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-address-edit"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-address-edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-address-edit"></code></pre>
</span>
<form id="form-POSTapi-v1-user-address-edit" data-method="POST"
      data-path="api/v1/user/address/edit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-address-edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-address-edit"
                    onclick="tryItOut('POSTapi-v1-user-address-edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-address-edit"
                    onclick="cancelTryOut('POSTapi-v1-user-address-edit');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-address-edit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/address/edit</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-address-edit" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-address-edit"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>address_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="address_id"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body" required  hidden>
    <br>
<p>user address id.</p>        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body" required  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>longitude</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="longitude"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body" required  hidden>
    <br>
<p>user address longitude value.</p>        </p>
                <p>
            <b><code>latitude</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="latitude"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body" required  hidden>
    <br>
<p>user address latitude value.</p>        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="street"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body" required  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>building</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="building"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body"  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>floor</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="floor"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body"  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>apartment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="apartment"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body"  hidden>
    <br>
<p>user address.</p>        </p>
                <p>
            <b><code>mobile_field</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="mobile_field"
               data-endpoint="POSTapi-v1-user-address-edit"
               data-component="body" required  hidden>
    <br>
<p>length UAE mobile number.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-address-delete">Delete Address Data.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to Delete Address Data.</p>

<span id="example-requests-POSTapi-v1-user-address-delete">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/address/delete" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"address_id\": 1
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/address/delete"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "address_id": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-address-delete">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-address-delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-address-delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-address-delete"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-address-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-address-delete"></code></pre>
</span>
<form id="form-POSTapi-v1-user-address-delete" data-method="POST"
      data-path="api/v1/user/address/delete"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-address-delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-address-delete"
                    onclick="tryItOut('POSTapi-v1-user-address-delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-address-delete"
                    onclick="cancelTryOut('POSTapi-v1-user-address-delete');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-address-delete" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/address/delete</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-address-delete" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-address-delete"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>address_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="address_id"
               data-endpoint="POSTapi-v1-user-address-delete"
               data-component="body" required  hidden>
    <br>
<p>user address id.</p>        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-address-list">List All Addresses Data.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>an API which Offers a mean to List All Addresses Data.</p>

<span id="example-requests-POSTapi-v1-user-address-list">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/address/list?items=10&amp;page=1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"items\": 6,
    \"page\": 5
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/address/list"
);

const params = {
    "items": "10",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "items": 6,
    "page": 5
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-address-list">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-address-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-address-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-address-list"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-address-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-address-list"></code></pre>
</span>
<form id="form-POSTapi-v1-user-address-list" data-method="POST"
      data-path="api/v1/user/address/list"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-address-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-address-list"
                    onclick="tryItOut('POSTapi-v1-user-address-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-address-list"
                    onclick="cancelTryOut('POSTapi-v1-user-address-list');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-address-list" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/address/list</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-v1-user-address-list" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-v1-user-address-list"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>items</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="items"
               data-endpoint="POSTapi-v1-user-address-list"
               data-component="query"  hidden>
    <br>
<p>(optional) items per page.</p>            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="POSTapi-v1-user-address-list"
               data-component="query"  hidden>
    <br>
<p>(optional) number of desired page.</p>            </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>items</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="items"
               data-endpoint="POSTapi-v1-user-address-list"
               data-component="body"  hidden>
    <br>
        </p>
                <p>
            <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="POSTapi-v1-user-address-list"
               data-component="body"  hidden>
    <br>
        </p>
    
    </form>

            <h2 id="user-management-POSTapi-v1-user-auth-sociallogin">Login user by Social.</h2>

<p>
</p>

<p>an API which Offers a mean to login a user by social media</p>

<span id="example-requests-POSTapi-v1-user-auth-sociallogin">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://basmety.test/api/v1/user/auth/sociallogin" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Api-Version: v1" \
    --header "Api-Locale: ar" \
    --data "{
    \"first_name\": \"Fahmi\",
    \"last_name\": \"Moustafa\",
    \"email\": \"user@company.com\",
    \"image\": \"http:\\/\\/google.com\\/profile\\/avatar.png\",
    \"social_UUID\": \"Us20er20\",
    \"UUID\": \"dsf6sd5g5ds6g56sd5g6sd5g6s6a5d6\",
    \"logged_by\": 1
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://basmety.test/api/v1/user/auth/sociallogin"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "Api-Locale": "ar",
};

let body = {
    "first_name": "Fahmi",
    "last_name": "Moustafa",
    "email": "user@company.com",
    "image": "http:\/\/google.com\/profile\/avatar.png",
    "social_UUID": "Us20er20",
    "UUID": "dsf6sd5g5ds6g56sd5g6sd5g6s6a5d6",
    "logged_by": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-user-auth-sociallogin">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;error&quot;: [
        {
            &quot;failed&quot;: [
                &quot;&quot;
            ]
        }
    ],
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-auth-sociallogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-auth-sociallogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-auth-sociallogin"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-auth-sociallogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-auth-sociallogin"></code></pre>
</span>
<form id="form-POSTapi-v1-user-auth-sociallogin" data-method="POST"
      data-path="api/v1/user/auth/sociallogin"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","Api-Locale":"ar"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-auth-sociallogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-auth-sociallogin"
                    onclick="tryItOut('POSTapi-v1-user-auth-sociallogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-auth-sociallogin"
                    onclick="cancelTryOut('POSTapi-v1-user-auth-sociallogin');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-auth-sociallogin" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/auth/sociallogin</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="POSTapi-v1-user-auth-sociallogin"
               data-component="body" required  hidden>
    <br>
<p>user first name.</p>        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-v1-user-auth-sociallogin"
               data-component="body" required  hidden>
    <br>
<p>user last name.</p>        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-user-auth-sociallogin"
               data-component="body" required  hidden>
    <br>
<p>the user Email address.</p>        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="image"
               data-endpoint="POSTapi-v1-user-auth-sociallogin"
               data-component="body"  hidden>
    <br>
<p>image url.</p>        </p>
                <p>
            <b><code>social_UUID</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="social_UUID"
               data-endpoint="POSTapi-v1-user-auth-sociallogin"
               data-component="body"  hidden>
    <br>
<p>social UUID.</p>        </p>
                <p>
            <b><code>UUID</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="UUID"
               data-endpoint="POSTapi-v1-user-auth-sociallogin"
               data-component="body"  hidden>
    <br>
<p>user UUID for FireBase Notifications.</p>        </p>
                <p>
            <b><code>logged_by</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="logged_by"
               data-endpoint="POSTapi-v1-user-auth-sociallogin"
               data-component="body" required  hidden>
    <br>
<p>1 google | 2 facebook.</p>        </p>
    
    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash","javascript"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>