<!DOCTYPE html><html><head><meta charset="utf-8"><title>Blueprint Docs</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:black;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #f2f2f2;margin-bottom:12px}h1,h2,h3,h4,h5{color:black;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#428bca;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(0,0,0,0) 20%, rgba(0,0,0,0.2) 51.4%, rgba(255,255,255,0.2) 51.4%, rgba(255,255,255,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(0,0,0,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:6px;overflow:auto}pre code{color:black;background-color:transparent;padding:0;border:none}code{color:#444;background-color:#f5f5f5;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:black;background-color:#f0f6fb;border-left:4px solid #428bca}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#428bca}.warning{color:black;background-color:#fbf1f0;border-left:4px solid #c9302c}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#c9302c}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:black;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(0,0,0,0.7);padding:8px 12px;border-top:1px solid #d9d9d9;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#000;background-color:#f2f2f2;border-radius:10px;margin:-2px 0}.badge.get{color:#70bbe1;background-color:#d9edf7}.badge.head{color:#70bbe1;background-color:#d9edf7}.badge.options{color:#70bbe1;background-color:#d9edf7}.badge.put{color:#f0db70;background-color:#fcf8e3}.badge.patch{color:#f0db70;background-color:#fcf8e3}.badge.post{color:#93cd7c;background-color:#dff0d8}.badge.delete{color:#ce8383;background-color:#f2dede}.collapse-button{float:right}.collapse-button .close{display:none;color:#428bca;cursor:pointer}.collapse-button .open{color:#428bca;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#428bca}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:white}.right pre{background-color:#1d1f21;border:1px solid #1d1f21}.right pre code{color:#c5c8c6}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e8ab8}.definition .method.head{color:#2e8ab8}.definition .method.options{color:#2e8ab8}.definition .method.post{color:#56b82e}.definition .method.put{color:#b8a22e}.definition .method.patch{color:#b8a22e}.definition .method.delete{color:#b82e2e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:black;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#444}.right .example-names .tab-button{color:white;border:1px solid #666;border-radius:6px}.right .example-names .tab-button.active{background-color:#5e5e5e}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#fbfbfb;border-right:1px solid #f0f0f0;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#333;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(0,0,0,0.5);background-color:#f2f2f2;text-decoration:none !important;border-top:1px solid #d9d9d9;border-left:1px solid #d9d9d9;border-right:1px solid #d9d9d9;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:white;border:1px solid #d9d9d9;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#f2f2f2;border-bottom:1px solid #d9d9d9;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #d9d9d9}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px;display:inline-block}.action h4.action-heading .method.get{color:#fff;background-color:#337ab7}.action h4.action-heading .method.head{color:#fff;background-color:#337ab7}.action h4.action-heading .method.options{color:#fff;background-color:#337ab7}.action h4.action-heading .method.put{color:#fff;background-color:#ed9c28}.action h4.action-heading .method.patch{color:#fff;background-color:#ed9c28}.action h4.action-heading .method.post{color:#fff;background-color:#5cb85c}.action h4.action-heading .method.delete{color:#fff;background-color:#d9534f}.action h4.action-heading code{color:#444;background-color:#f5f5f5;border-color:#cfcfcf;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid white;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#bce8f1}.action.get h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.head{border-color:#bce8f1}.action.head h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.options{border-color:#bce8f1}.action.options h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.post{border-color:#d6e9c6}.action.post h4.action-heading{color:#5cb85c;background:#dff0d8;border-bottom-color:#d6e9c6}.action.put{border-color:#faebcc}.action.put h4.action-heading{color:#ed9c28;background:#fcf8e3;border-bottom-color:#faebcc}.action.patch{border-color:#faebcc}.action.patch h4.action-heading{color:#ed9c28;background:#fcf8e3;border-bottom-color:#faebcc}.action.delete{border-color:#ebccd1}.action.delete h4.action-heading{color:#d9534f;background:#f2dede;border-bottom-color:#ebccd1}</style></head><body class="preload"><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container-fluid"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#top">Overview</a></div><div class="collapse-content"><ul><li><a href="#header-authentication">Authentication</a></li><li><a href="#header-example-header">Example Header</a></li><li><a href="#header-claims">Claims</a></li><li><a href="#header-consumer-identification">Consumer Identification</a></li><li><a href="#header-example-headers">Example Headers</a></li><li><a href="#header-filtering,-ordering,-pagination-&amp;-searching">Filtering, Ordering, Pagination & Searching</a></li><li><a href="#header-filtering">Filtering</a></li><li><a href="#header-ordering">Ordering</a></li><li><a href="#header-pagination">Pagination</a></li><li><a href="#header-searching">Searching</a></li><li><a href="#header-http-methods">HTTP Methods</a></li><li><a href="#header-localization">Localization</a></li><li><a href="#header-media-type">Media Type</a></li><li><a href="#header-notational-conventions">Notational Conventions</a></li><li><a href="#header-representation-of-date-and-time">Representation of Date and Time</a></li><li><a href="#header-resource-ids">Resource IDs</a></li><li><a href="#header-example">Example</a></li><li><a href="#header-status-codes-and-errors">Status Codes and Errors</a></li><li><a href="#header-error-response">Error response</a></li><li><a href="#header-example-1">Example</a></li><li><a href="#header-validation-error">Validation Error</a></li><li><a href="#header-generic-error">Generic Error</a></li><li><a href="#header-error-codes-dictionary">Error Codes Dictionary</a></li><li><a href="#header-versioning">Versioning</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#authentication-1">Authentication</a></div><div class="collapse-content"><ul><li><a href="#authentication-user-login">User login</a><ul><li><a href="#authentication-user-login-post"><span class="badge post"><i class="fa fa-plus"></i></span>Retrieve a token</a></li><li><a href="#authentication-user-login-post-1"><span class="badge post"><i class="fa fa-plus"></i></span>Refresh a token</a></li></ul></li><li><a href="#authentication-user-registration-post"><span class="badge post"><i class="fa fa-plus"></i></span>Register a new user</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#user">User</a></div><div class="collapse-content"><ul><li><a href="#user-current-user-profile">Current user profile</a><ul><li><a href="#user-current-user-profile-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve profile of the current user</a></li><li><a href="#user-current-user-profile-patch"><span class="badge patch"><i class="fa fa-pencil"></i></span>Partialy update a profile of the current user</a></li></ul></li><li><a href="#user-user-password-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Change a password of the current user</a></li><li><a href="#user-user-avatar">User avatar</a><ul><li><a href="#user-user-avatar-post"><span class="badge post"><i class="fa fa-plus"></i></span>Set user avatar</a></li><li><a href="#user-user-avatar-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete user avatar</a></li></ul></li><li><a href="#user-users-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List all users</a></li><li><a href="#user-user-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Retrieve a user</a></li></ul></div></div><p style="text-align: center; word-wrap: break-word;"><a href="https://api.example.com">https://api.example.com</a></p></nav><div class="content"><header><h1 id="top">Blueprint Docs</h1></header><p><em>This API blueprint is subject to change due to technology restrictions, performance optimizations or changing requirements.</em></p>
            <h2 id="header-authentication">Authentication <a class="permalink" href="#header-authentication" aria-hidden="true">¶</a></h2>
            <ul>
                <li>
                    <p>This API uses <a href="http://jwt.io/">JWT</a> for authentication,</p>
                </li>
                <li>
                    <p>Every token MUST be refreshed before its expiration time,</p>
                </li>
                <li>
                    <p>Token MUST be provided in <code>Authorization</code> header,</p>
                </li>
                <li>
                    <p>Toke MUST be provided for each request that requires authentication,</p>
                </li>
                <li>
                    <p>This API issues a <strong>long-lived access tokens</strong> for consumers. A long-lived JWT generally SHOULD lasts about <strong>30 days</strong>. If no requests are made, the token MUST expire and the user MUST go through the login flow again to get a new one.</p>
                </li>
            </ul>
            <blockquote>
                <p>A custom scheme like “JWT” seems to be more appropriate than coercing the OAuth2 Bearer scheme.</p>
            </blockquote>
            <h3 id="header-example-header">Example Header <a class="permalink" href="#header-example-header" aria-hidden="true">¶</a></h3>
            <pre><code>Authorization: JWT eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9<span class="hljs-class">.eyJzdWIiOiJhNnZoQW8zRkc3dDEiLCJuYW1lIjoiSm9obiBEb2UiLCJpYXQiOjE0NzA1OTg5NzIsImV4cCI6MTQ3MDY4NTM3Mn0</span><span class="hljs-class">.ltA9zZmJKszBJuuV7pTWtY7LzLXrRUfebJDhy_jGMeM</span></code></pre>
            <h3 id="header-claims">Claims <a class="permalink" href="#header-claims" aria-hidden="true">¶</a></h3>
            <ul>
                <li>
                    <p><code>exp</code> - The exp ( <em>expiration time</em> ) claim identifies the expiration time on or after which the JWT MUST NOT be accepted for processing.</p>
                </li>
                <li>
                    <p><code>iat</code> - The iat ( <em>issued at</em> ) claim identifies the time at which the JWT was issued.</p>
                </li>
                <li>
                    <p><code>sub</code> - The aud ( <em>audience</em> ) claim identifies the subject of this token (for e.g. a user id).</p>
                </li>
                <li>
                    <p><code>iss</code> - The iss ( <em>issuer</em> ) claim identifies the principal that issued the JWT.</p>
                </li>
            </ul>
            <h2 id="header-consumer-identification">Consumer Identification <a class="permalink" href="#header-consumer-identification" aria-hidden="true">¶</a></h2>
            <p>This API uses <code>User-Agent</code> and <code>Application-Id</code> headers to identify API consumer. <code>Application-Id</code> MUST contain an UUID that uniquely identifies a particular consumer installation.</p>
            <h3 id="header-example-headers">Example Headers <a class="permalink" href="#header-example-headers" aria-hidden="true">¶</a></h3>
            <pre><code>User-Agent: Mozilla/<span class="hljs-number">5.0</span> (Linux; Android <span class="hljs-number">4.4</span>; Nexus <span class="hljs-number">5</span> Build/_BuildID_) AppleWebKit/<span class="hljs-number">537.36</span> (KHTML, like Gecko) Version/<span class="hljs-number">4.0</span> Chrome/<span class="hljs-number">30.0</span><span class="hljs-number">.0</span><span class="hljs-number">.0</span> Mobile Safari/<span class="hljs-number">537.36</span>
Application-Id: <span class="hljs-number">6454</span>d937-<span class="hljs-number">0</span>a18-<span class="hljs-number">44</span>a8-b482-bb48684f1ed4</code></pre>
            <h2 id="header-filtering,-ordering,-pagination-&amp;-searching">Filtering, Ordering, Pagination &amp; Searching <a class="permalink" href="#header-filtering,-ordering,-pagination-&amp;-searching" aria-hidden="true">¶</a></h2>
            <h3 id="header-filtering">Filtering <a class="permalink" href="#header-filtering" aria-hidden="true">¶</a></h3>
            <p>This API can filter returned collections based on provided query parameters. Virtually any model field can be used as a filter.</p>
            <p>For example, when requesting a list of movies from the /movies endpoint, you may want to limit these to only those of drama genre. This could be accomplished with a request like <code>GET /movies?genre=drama</code>. Here, genre is a query parameter that implements a filter.</p>
            <h3 id="header-ordering">Ordering <a class="permalink" href="#header-ordering" aria-hidden="true">¶</a></h3>
            <p>This API can sort returned collections. A generic query parameter <code>sort</code> is used to describe sorting rules. This parameter can take a list of comma separated field, each with a possible unary negative to imply descending sort order.</p>
            <p>E.g. <code>GET /movies?sort=-rating</code> - Retrieves a list of movies in descending order of user rating.</p>
            <p>By default all resources are ordered by their creation time, from newest to oldest.</p>
            <h3 id="header-pagination">Pagination <a class="permalink" href="#header-pagination" aria-hidden="true">¶</a></h3>
            <p>This API uses the <a href="http://tools.ietf.org/html/rfc5988#page-6">Link header - RFC 5988</a> to include pagination details.</p>
            <p>An example of a Link header is described in <a href="https://developer.github.com/guides/traversing-with-pagination/">GitHub documentation</a>.</p>
            <p>This API returns total count of paged resources in <code>Total-Count</code> HTTP header.</p>
            <h3 id="header-searching">Searching <a class="permalink" href="#header-searching" aria-hidden="true">¶</a></h3>
            <p>This API uses a generic parameter <code>search</code> to expose a full text search mechanism.</p>
            <h2 id="header-http-methods">HTTP Methods <a class="permalink" href="#header-http-methods" aria-hidden="true">¶</a></h2>
            <p>This API uses HTTP verbs (methods) as following:</p>
            <ul>
                <li>
                    <p><code>GET</code> - <em>Read</em> - used to <strong>read</strong> (or retrieve) a representation of a resource,</p>
                </li>
                <li>
                    <p><code>POST</code> - <em>Create</em> - used to <strong>create</strong> new resources. In particular, it’s used to create subordinate resources.</p>
                </li>
                <li>
                    <p><code>PUT</code> - <em>Update/Replace</em> - used for <strong>update</strong> capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. On successful request, replaces identified resource with the request body.</p>
                </li>
                <li>
                    <p><code>PATCH</code> - <em>Update/Modify</em> - used for <strong>modify</strong> capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource.</p>
                </li>
                <li>
                    <p><code>DELETE</code> - <em>Delete</em> - used to <strong>delete</strong> a resource identified by a URI.</p>
                </li>
            </ul>
            <h2 id="header-localization">Localization <a class="permalink" href="#header-localization" aria-hidden="true">¶</a></h2>
            <p>This API uses <code>Accept-Language</code> header to identify the locale.</p>
            <p><code>Accept-Language: en</code></p>
            <p>This header SHOULD be present in every request. If not, API MUST use the <strong>english</strong> language/locale.</p>
            <h2 id="header-media-type">Media Type <a class="permalink" href="#header-media-type" aria-hidden="true">¶</a></h2>
            <p>Where applicable this API MUST use the JSON media-type. Requests with a message-body are using plain JSON to set or update resource states.</p>
            <p><code>Content-type: application/json</code> and <code>Accept: application/json</code> headers SHOULD be set on all requests if not stated otherwise.</p>
            <h2 id="header-notational-conventions">Notational Conventions <a class="permalink" href="#header-notational-conventions" aria-hidden="true">¶</a></h2>
            <p>The key words “MUST”, “MUST NOT”, “REQUIRED”, “SHALL”, “SHALL NOT”, “SHOULD”, “SHOULD NOT”, “RECOMMENDED”, “MAY”, and “OPTIONAL” in this document are to be interpreted as described in <a href="https://www.ietf.org/rfc/rfc2119">RFC2119</a>.</p>
            <h2 id="header-representation-of-date-and-time">Representation of Date and Time <a class="permalink" href="#header-representation-of-date-and-time" aria-hidden="true">¶</a></h2>
            <p>All exchange of date and time-related data MUST be done according to ISO 8601 standard and stored in UTC.</p>
            <p>When returning date and time-related data <code>YYYY-MM-DDThh:mm:ss.SSSZ</code> format MUST be used.</p>
            <h2 id="header-resource-ids">Resource IDs <a class="permalink" href="#header-resource-ids" aria-hidden="true">¶</a></h2>
            <p>This API uses short non-sequential url-friendly unique ids. Every resource id MUST consists of 9 url-friendly characters: <code>A-Z</code>, <code>a-z</code>, <code>0-9</code>, <code>_</code> and <code>-</code>.</p>
            <h3 id="header-example">Example <a class="permalink" href="#header-example" aria-hidden="true">¶</a></h3>
            <p><code>a6vhAo3FG7t1</code></p>
            <h2 id="header-status-codes-and-errors">Status Codes and Errors <a class="permalink" href="#header-status-codes-and-errors" aria-hidden="true">¶</a></h2>
            <p>This API uses HTTP status codes to communicate with the API consumer.</p>
            <ul>
                <li>
                    <p><code>200 OK</code> - Response to a successful GET, PUT, PATCH or DELETE.</p>
                </li>
                <li>
                    <p><code>201 Created</code> - Response to a POST that results in a creation.</p>
                </li>
                <li>
                    <p><code>204 No Content</code> - Response to a successful request that won’t be returning a body (like a DELETE request).</p>
                </li>
                <li>
                    <p><code>400 Bad Request</code> - Malformed request; form validation errors.</p>
                </li>
                <li>
                    <p><code>401 Unauthorized</code> - When no or invalid authentication details are provided.</p>
                </li>
                <li>
                    <p><code>403 Forbidden</code> - When authentication succeeded but authenticated user doesn’t have access to the resource.</p>
                </li>
                <li>
                    <p><code>404 Not Found</code> - When a non-existent resource is requested.</p>
                </li>
                <li>
                    <p><code>405 Method Not Allowed</code> - Method not allowed.</p>
                </li>
                <li>
                    <p><code>406 Not Acceptable</code> - Could not satisfy the request Accept header.</p>
                </li>
                <li>
                    <p><code>415 Unsupported Media Type</code> - Unsupported media type in request.</p>
                </li>
            </ul>
            <h3 id="header-error-response">Error response <a class="permalink" href="#header-error-response" aria-hidden="true">¶</a></h3>
            <p>This API returns both, machine-readable error codes and human-readable error messages in response body when an error is encountered.</p>
            <h4 id="header-example-1">Example <a class="permalink" href="#header-example-1" aria-hidden="true">¶</a></h4>
            <h5 id="header-validation-error">Validation Error <a class="permalink" href="#header-validation-error" aria-hidden="true">¶</a></h5>
            <pre><code class="language-js">{
    <span class="hljs-string">"statusCode"</span>: <span class="hljs-number">400</span>,
    <span class="hljs-string">"error"</span>: <span class="hljs-string">"Bad Request"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"Invalid query parameters"</span>,
    <span class="hljs-string">"data"</span>: {
        <span class="hljs-string">"code"</span>: <span class="hljs-number">10003</span>,
        <span class="hljs-string">"validation"</span>: {
            <span class="hljs-string">"details"</span>:[
                {
                    <span class="hljs-string">"message"</span>: <span class="hljs-string">"\"name\" is required"</span>,
                    <span class="hljs-string">"path"</span>: <span class="hljs-string">"name"</span>,
                    <span class="hljs-string">"type"</span>: <span class="hljs-string">"any.required"</span>,
                    <span class="hljs-string">"context"</span>: {
                        <span class="hljs-string">"key"</span>: <span class="hljs-string">"name"</span>
                    }
                },{
                    <span class="hljs-string">"message"</span>: <span class="hljs-string">"\"email\" must be a valid email"</span>,
                    <span class="hljs-string">"path"</span>: <span class="hljs-string">"email"</span>,
                    <span class="hljs-string">"type"</span>: <span class="hljs-string">"string.email"</span>,
                    <span class="hljs-string">"context"</span>: {
                        <span class="hljs-string">"value"</span>: <span class="hljs-string">"foo"</span>,
                        <span class="hljs-string">"key"</span>: <span class="hljs-string">"email"</span>
                    }
                }
            ],
            <span class="hljs-string">"source"</span>: <span class="hljs-string">"query"</span>,
            <span class="hljs-string">"keys"</span>: [ <span class="hljs-string">"name"</span>,<span class="hljs-string">"email"</span> ]
        }
    }
}</code></pre>
            <h5 id="header-generic-error">Generic Error <a class="permalink" href="#header-generic-error" aria-hidden="true">¶</a></h5>
            <pre><code class="language-js">{
    <span class="hljs-string">"statusCode"</span>: <span class="hljs-number">403</span>,
    <span class="hljs-string">"error"</span>: <span class="hljs-string">"Forbidden"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"Your account is suspended and is not permitted to access this feature"</span>,
    <span class="hljs-string">"data"</span>: {
        <span class="hljs-string">"code"</span>: <span class="hljs-number">13003</span>
    }
}</code></pre>
            <h4 id="header-error-codes-dictionary">Error Codes Dictionary <a class="permalink" href="#header-error-codes-dictionary" aria-hidden="true">¶</a></h4>
            <ul>
                <li>
                    <p><code>10003</code> - Invalid query parameters</p>
                </li>
                <li>
                    <p><code>10005</code> - Date is not in ISO 8601 standard</p>
                </li>
                <li>
                    <p><code>10010</code> - Invalid Content-Type</p>
                </li>
                <li>
                    <p><code>10011</code> - Invalid User-Agent</p>
                </li>
                <li>
                    <p><code>10012</code> - Invalid or missing Application-Id</p>
                </li>
                <li>
                    <p><code>11001</code> - Invalid or expired token</p>
                </li>
                <li>
                    <p><code>11003</code> - Bad authentication data - <em>Method requires authentication but it was not presented or was wholly invalid.</em></p>
                </li>
                <li>
                    <p><code>11005</code> - Account not allowed to access this endpoint</p>
                </li>
                <li>
                    <p><code>13003</code> - Your account is suspended and is not permitted to access this feature</p>
                </li>
            </ul>
            <h2 id="header-versioning">Versioning <a class="permalink" href="#header-versioning" aria-hidden="true">¶</a></h2>
            <p>This API uses <code>Api-Version</code> header to identify requested version. Every <strong>minor</strong> version SHOULD be backward compatible. However, <strong>major</strong> versions MAY introduce <em>breaking changes</em>.</p>
            <p><code>Api-Version: 1.0.0</code></p>
            <p>This header SHOULD be present in every request. If not, API MUST use the newest available major release.</p>
            <p>If requested version is not available, API SHOULD try to fall back to the next available minor release.</p>
            <section id="authentication-1" class="resource-group"><h2 class="group-heading">Authentication <a href="#authentication-1" class="permalink">&para;</a></h2><div id="authentication-user-login" class="resource"><h3 class="resource-heading">User login <a href="#authentication-user-login" class="permalink">&nbsp;&para;</a></h3><p>Access tokens are required to access nearly all endpoints of this API.</p>
                    <div id="authentication-user-login-post" class="action post"><h4 class="action-heading"><div class="name">Retrieve a token</div><a href="#authentication-user-login-post" class="method post">POST</a><code class="uri">/auth/login</code></h4><p>Allows to retrieve a valid JSON Web Token for username and password.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/auth/login</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">login</span>": <span class="hljs-value"><span class="hljs-string">"john.doe@mail.com"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"QXR0mi38a2"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">login</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User email address"</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User password"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"login"</span>,
    <span class="hljs-string">"password"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...."</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"JSON Web Token."</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="authentication-user-login-post-1" class="action post"><h4 class="action-heading"><div class="name">Refresh a token</div><a href="#authentication-user-login-post-1" class="method post">POST</a><code class="uri">/auth/refresh-token</code></h4><p>Allows to retrieve a new, valid JSON Web Token based on a valid JSON Web Token.</p>
                        <p>Expired tokens MUST NOT be refreshed.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/auth/refresh-token</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...."</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"New JWT"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="authentication-user-registration" class="resource"><h3 class="resource-heading">User registration <a href="#authentication-user-registration" class="permalink">&nbsp;&para;</a></h3><div id="authentication-user-registration-post" class="action post"><h4 class="action-heading"><div class="name">Register a new user</div><a href="#authentication-user-registration-post" class="method post">POST</a><code class="uri">/auth/register</code></h4><p>Creates a new user account.</p>
                        <ul>
                            <li>
                                <p>Provided email address MUST be unique.</p>
                            </li>
                            <li>
                                <p>Passwords MUST have at least six characters.</p>
                            </li>
                            <li>
                                <p>Passwords MUST NOT contain the user name or parts of the user’s full name, such as his first name.</p>
                            </li>
                            <li>
                                <p>Passwords MUST use at least three of the four available character types: lowercase letters, uppercase letters, numbers, and symbols.</p>
                            </li>
                        </ul>
                        <p>After successful registration a confirmation email MUST be sent to provided address.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Error codes</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><code>400</code></td>
                                <td><code>4001</code></td>
                                <td>Password doesn’t match password guidelines</td>
                            </tr>
                            <tr>
                                <td><code>400</code></td>
                                <td><code>3001</code></td>
                                <td>User already exists</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/auth/register</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.doe@mail.com"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"QXR0mi38a2"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"E-mail address."</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User password."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"email"</span>,
    <span class="hljs-string">"password"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>201</code></strong></div></div></div></section><section id="user" class="resource-group"><h2 class="group-heading">User <a href="#user" class="permalink">&para;</a></h2><div id="user-current-user-profile" class="resource"><h3 class="resource-heading">Current user profile <a href="#user-current-user-profile" class="permalink">&nbsp;&para;</a></h3><p>Current user MUST be identifed by JWT provided in request header.</p>
                    <div id="user-current-user-profile-get" class="action get"><h4 class="action-heading"><div class="name">Retrieve profile of the current user</div><a href="#user-current-user-profile-get" class="method get">GET</a><code class="uri">/users/me</code></h4><p>Retrieves the profile of the current user.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/users/me</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"a6vhAo3FG7t1"</span></span>,
  "<span class="hljs-attribute">createdAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
  "<span class="hljs-attribute">updatedAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.doe@mail.com"</span></span>,
  "<span class="hljs-attribute">facebookId</span>": <span class="hljs-value"><span class="hljs-number">888047057953991</span></span>,
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"John"</span></span>,
  "<span class="hljs-attribute">surname</span>": <span class="hljs-value"><span class="hljs-string">"Doe"</span></span>,
  "<span class="hljs-attribute">avatar</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[
        <span class="hljs-string">"a6vhAo3FG7t1"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Short non-sequential url-friendly unique id."</span>
    </span>}</span>,
    "<span class="hljs-attribute">createdAt</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"ISO Date/time string. When this resource was created."</span>
    </span>}</span>,
    "<span class="hljs-attribute">updatedAt</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"ISO Date/time string. When this resource was last updated."</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Login. Unique email address of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">facebookId</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"number"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Facebook ID of the user if user account is linked to the Facebook account."</span>
    </span>}</span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"First name of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">surname</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Last name of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">avatar</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"URL to user avatar."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"id"</span>,
    <span class="hljs-string">"email"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="user-current-user-profile-patch" class="action patch"><h4 class="action-heading"><div class="name">Partialy update a profile of the current user</div><a href="#user-current-user-profile-patch" class="method patch">PATCH</a><code class="uri">/users/me</code></h4><p>Updates a profile of the current user setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method patch">PATCH</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/users/me</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Ben"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"First name of the user."</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"a6vhAo3FG7t1"</span></span>,
  "<span class="hljs-attribute">createdAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
  "<span class="hljs-attribute">updatedAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.doe@mail.com"</span></span>,
  "<span class="hljs-attribute">facebookId</span>": <span class="hljs-value"><span class="hljs-number">888047057953991</span></span>,
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"John"</span></span>,
  "<span class="hljs-attribute">surname</span>": <span class="hljs-value"><span class="hljs-string">"Doe"</span></span>,
  "<span class="hljs-attribute">avatar</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[
        <span class="hljs-string">"a6vhAo3FG7t1"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Short non-sequential url-friendly unique id."</span>
    </span>}</span>,
    "<span class="hljs-attribute">createdAt</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"ISO Date/time string. When this resource was created."</span>
    </span>}</span>,
    "<span class="hljs-attribute">updatedAt</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"ISO Date/time string. When this resource was last updated."</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Login. Unique email address of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">facebookId</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"number"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Facebook ID of the user if user account is linked to the Facebook account."</span>
    </span>}</span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"First name of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">surname</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Last name of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">avatar</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"URL to user avatar."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"id"</span>,
    <span class="hljs-string">"email"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="user-user-password" class="resource"><h3 class="resource-heading">User password <a href="#user-user-password" class="permalink">&nbsp;&para;</a></h3><div id="user-user-password-put" class="action put"><h4 class="action-heading"><div class="name">Change a password of the current user</div><a href="#user-user-password-put" class="method put">PUT</a><code class="uri">/users/me/password</code></h4><p>Changes user password.</p>
                        <p>After password is changed all access tokens issued for this user prior to password change must be invalidated.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Error codes</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><code>400</code></td>
                                <td><code>4001</code></td>
                                <td>Password doesn’t match password guidelines</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/users/me/password</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">old_password</span>": <span class="hljs-value"><span class="hljs-string">"secret"</span></span>,
  "<span class="hljs-attribute">new_password</span>": <span class="hljs-value"><span class="hljs-string">"$3C6e7"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">old_password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}</span>,
    "<span class="hljs-attribute">new_password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"old_password"</span>,
    <span class="hljs-string">"new_password"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9..."</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"New JSON Web Token."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="user-user-avatar" class="resource"><h3 class="resource-heading">User avatar <a href="#user-user-avatar" class="permalink">&nbsp;&para;</a></h3><div id="user-user-avatar-post" class="action post"><h4 class="action-heading"><div class="name">Set user avatar</div><a href="#user-user-avatar-post" class="method post">POST</a><code class="uri">/users/me/avatar</code></h4><p>Sets user avatar.</p>
                        <p>Either upload the raw binary ( <strong>media</strong> parameter) of the file, or its base64-encoded contents ( <strong>media_data</strong> parameter). Use raw binary when possible, because base64 encoding results in larger file sizes.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Error codes</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><code>400</code></td>
                                <td><code>2001</code></td>
                                <td>File is too large</td>
                            </tr>
                            <tr>
                                <td><code>400</code></td>
                                <td><code>2002</code></td>
                                <td>Unsupported file type</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/users/me/avatar</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">multipart/form-data</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">avatar</span>": <span class="hljs-value"><span class="hljs-string">"https://..."</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">avatar</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Public download URL"</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="user-user-avatar-delete" class="action delete"><h4 class="action-heading"><div class="name">Delete user avatar</div><a href="#user-user-avatar-delete" class="method delete">DELETE</a><code class="uri">/users/me/avatar</code></h4><p>Restores user avatar to the default one.</p>
                        <p><strong>Endpoint information</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/users/me/avatar</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>204</code></strong></div></div></div><div id="user-users" class="resource"><h3 class="resource-heading">Users <a href="#user-users" class="permalink">&nbsp;&para;</a></h3><div id="user-users-get" class="action get"><h4 class="action-heading"><div class="name">List all users</div><a href="#user-users-get" class="method get">GET</a><code class="uri">/users</code></h4><p>Returns a list of users. The users are returned in sorter order, with the most recently created user accounts appearing first.</p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/users</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[
  {
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"a6vhAo3FG7t1"</span></span>,
    "<span class="hljs-attribute">createdAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
    "<span class="hljs-attribute">updatedAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.doe@mail.com"</span></span>,
    "<span class="hljs-attribute">facebookId</span>": <span class="hljs-value"><span class="hljs-number">888047057953991</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"John"</span></span>,
    "<span class="hljs-attribute">surname</span>": <span class="hljs-value"><span class="hljs-string">"Doe"</span></span>,
    "<span class="hljs-attribute">avatar</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span>
  </span>}
]</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="user-user" class="resource"><h3 class="resource-heading">User <a href="#user-user" class="permalink">&nbsp;&para;</a></h3><div id="user-user-get" class="action get"><h4 class="action-heading"><div class="name">Retrieve a user</div><a href="#user-user-get" class="method get">GET</a><code class="uri">/users/{id}</code></h4><p>Retrieves the details of an existing user.</p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requires authentication</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Has restricted scope</td>
                                <td>No</td>
                            </tr>
                            </tbody>
                        </table>
                        <p><strong>Error codes</strong></p>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><code>400</code></td>
                                <td><code>1000</code></td>
                                <td>Referenced resource not found</td>
                            </tr>
                            </tbody>
                        </table>
                        <h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">https://api.example.com</span>/users/<span class="hljs-attribute" title="id">a6vhAo3FG7t1</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>a6vhAo3FG7t1</span></span><p>id of the user.</p>
                                </dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">JWT &lt;token&gt;</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"a6vhAo3FG7t1"</span></span>,
  "<span class="hljs-attribute">createdAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
  "<span class="hljs-attribute">updatedAt</span>": <span class="hljs-value"><span class="hljs-string">"2016-07-01T15:11:09.553Z"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.doe@mail.com"</span></span>,
  "<span class="hljs-attribute">facebookId</span>": <span class="hljs-value"><span class="hljs-number">888047057953991</span></span>,
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"John"</span></span>,
  "<span class="hljs-attribute">surname</span>": <span class="hljs-value"><span class="hljs-string">"Doe"</span></span>,
  "<span class="hljs-attribute">avatar</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[
        <span class="hljs-string">"a6vhAo3FG7t1"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Short non-sequential url-friendly unique id."</span>
    </span>}</span>,
    "<span class="hljs-attribute">createdAt</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"ISO Date/time string. When this resource was created."</span>
    </span>}</span>,
    "<span class="hljs-attribute">updatedAt</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"ISO Date/time string. When this resource was last updated."</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Login. Unique email address of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">facebookId</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"number"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Facebook ID of the user if user account is linked to the Facebook account."</span>
    </span>}</span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"First name of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">surname</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Last name of the user."</span>
    </span>}</span>,
    "<span class="hljs-attribute">avatar</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value">[
        <span class="hljs-string">"string"</span>,
        <span class="hljs-string">"null"</span>
      ]</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"URL to user avatar."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"id"</span>,
    <span class="hljs-string">"email"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong></div></div></div></section></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 15 May 2019</p><script>/* eslint-env browser */
    /* eslint quotes: [2, "single"] */
    'use strict';

    /*
      Determine if a string ends with another string.
    */
    function endsWith(str, suffix) {
        return str.indexOf(suffix, str.length - suffix.length) !== -1;
    }

    /*
      Get a list of direct child elements by class name.
    */
    function childrenByClass(element, name) {
        var filtered = [];

        for (var i = 0; i < element.children.length; i++) {
            var child = element.children[i];
            var classNames = child.className.split(' ');
            if (classNames.indexOf(name) !== -1) {
                filtered.push(child);
            }
        }

        return filtered;
    }

    /*
      Get an array [width, height] of the window.
    */
    function getWindowDimensions() {
        var w = window,
            d = document,
            e = d.documentElement,
            g = d.body,
            x = w.innerWidth || e.clientWidth || g.clientWidth,
            y = w.innerHeight || e.clientHeight || g.clientHeight;

        return [x, y];
    }

    /*
      Collapse or show a request/response example.
    */
    function toggleCollapseButton(event) {
        var button = event.target.parentNode;
        var content = button.parentNode.nextSibling;
        var inner = content.children[0];

        if (button.className.indexOf('collapse-button') === -1) {
            // Clicked without hitting the right element?
            return;
        }

        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            // Currently showing, so let's hide it
            button.className = 'collapse-button';
            content.style.maxHeight = '0px';
        } else {
            // Currently hidden, so let's show it
            button.className = 'collapse-button show';
            content.style.maxHeight = inner.offsetHeight + 12 + 'px';
        }
    }

    function toggleTabButton(event) {
        var i, index;
        var button = event.target;

        // Get index of the current button.
        var buttons = childrenByClass(button.parentNode, 'tab-button');
        for (i = 0; i < buttons.length; i++) {
            if (buttons[i] === button) {
                index = i;
                button.className = 'tab-button active';
            } else {
                buttons[i].className = 'tab-button';
            }
        }

        // Hide other tabs and show this one.
        var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
        for (i = 0; i < tabs.length; i++) {
            if (i === index) {
                tabs[i].style.display = 'block';
            } else {
                tabs[i].style.display = 'none';
            }
        }
    }

    /*
      Collapse or show a navigation menu. It will not be hidden unless it
      is currently selected or `force` has been passed.
    */
    function toggleCollapseNav(event, force) {
        var heading = event.target.parentNode;
        var content = heading.nextSibling;
        var inner = content.children[0];

        if (heading.className.indexOf('heading') === -1) {
            // Clicked without hitting the right element?
            return;
        }

        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            // Currently showing, so let's hide it, but only if this nav item
            // is already selected. This prevents newly selected items from
            // collapsing in an annoying fashion.
            if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
                content.style.maxHeight = '0px';
            }
        } else {
            // Currently hidden, so let's show it
            content.style.maxHeight = inner.offsetHeight + 12 + 'px';
        }
    }

    /*
      Refresh the page after a live update from the server. This only
      works in live preview mode (using the `--server` parameter).
    */
    function refresh(body) {
        document.querySelector('body').className = 'preload';
        document.body.innerHTML = body;

        // Re-initialize the page
        init();
        autoCollapse();

        document.querySelector('body').className = '';
    }

    /*
      Determine which navigation items should be auto-collapsed to show as many
      as possible on the screen, based on the current window height. This also
      collapses them.
    */
    function autoCollapse() {
        var windowHeight = getWindowDimensions()[1];
        var itemsHeight = 64; /* Account for some padding */
        var itemsArray = Array.prototype.slice.call(
            document.querySelectorAll('nav .resource-group .heading'));

        // Get the total height of the navigation items
        itemsArray.forEach(function (item) {
            itemsHeight += item.parentNode.offsetHeight;
        });

        // Should we auto-collapse any nav items? Try to find the smallest item
        // that can be collapsed to show all items on the screen. If not possible,
        // then collapse the largest item and do it again. First, sort the items
        // by height from smallest to largest.
        var sortedItems = itemsArray.sort(function (a, b) {
            return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
        });

        while (sortedItems.length && itemsHeight > windowHeight) {
            for (var i = 0; i < sortedItems.length; i++) {
                // Will collapsing this item help?
                var itemHeight = sortedItems[i].nextSibling.offsetHeight;
                if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
                    // It will, so let's collapse it, remove its content height from
                    // our total and then remove it from our list of candidates
                    // that can be collapsed.
                    itemsHeight -= itemHeight;
                    toggleCollapseNav({target: sortedItems[i].children[0]}, true);
                    sortedItems.splice(i, 1);
                    break;
                }
            }
        }
    }

    /*
      Initialize the interactive functionality of the page.
    */
    function init() {
        var i, j;

        // Make collapse buttons clickable
        var buttons = document.querySelectorAll('.collapse-button');
        for (i = 0; i < buttons.length; i++) {
            buttons[i].onclick = toggleCollapseButton;

            // Show by default? Then toggle now.
            if (buttons[i].className.indexOf('show') !== -1) {
                toggleCollapseButton({target: buttons[i].children[0]});
            }
        }

        var responseCodes = document.querySelectorAll('.example-names');
        for (i = 0; i < responseCodes.length; i++) {
            var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
            for (j = 0; j < tabButtons.length; j++) {
                tabButtons[j].onclick = toggleTabButton;

                // Show by default?
                if (j === 0) {
                    toggleTabButton({target: tabButtons[j]});
                }
            }
        }

        // Make nav items clickable to collapse/expand their content.
        var navItems = document.querySelectorAll('nav .resource-group .heading');
        for (i = 0; i < navItems.length; i++) {
            navItems[i].onclick = toggleCollapseNav;

            // Show all by default
            toggleCollapseNav({target: navItems[i].children[0]});
        }
    }

    // Initial call to set up buttons
    init();

    window.onload = function () {
        autoCollapse();
        // Remove the `preload` class to enable animations
        document.querySelector('body').className = '';
    };
</script></body></html>