<x-app-layout>

    <style type="text/css">


        h1	{
            font-size: 25px;
        }
        h2	{
            font-size: 20px;
        }
        h3	{
            font-size: 16px;
            font-weight: bold;
        }
        hr	{
            height: 1px;
            border: 0;
            color: #ddd;
            background-color: #ddd;
        }

        .app-desc {
            clear: both;
            margin-left: 20px;
        }
        .param-name {
            width: 100%;
        }
        .license-info {
            margin-left: 20px;
        }

        .license-url {
            margin-left: 20px;
        }

        .model {
            margin: 0 0 0px 20px;
        }

        .method {
            margin-left: 20px;
        }

        .method-notes	{
            margin: 10px 0 20px 0;
            font-size: 90%;
            color: #555;
        }

        pre {
            padding: 10px;
            margin-bottom: 2px;
        }

        .http-method {
            text-transform: uppercase;
        }

        pre.get {
            background-color: #1C2A35;
        }

        pre.post {
            background-color: #10a54a;
        }

        pre.put {
            background-color: #c5862b;
        }

        pre.delete {
            background-color: #a41e22;
        }

        .huge	{
            color: #fff;
        }

        pre.example {
            background-color: #1C2A35;
            color:white;
            padding: 10px;
            border: 1px solid #ddd;
        }

        code {
            white-space: pre;
        }

        .nickname {
            font-weight: bold;
        }

        .method-path {
            font-size: 1.5em;
            background-color: #1C2A35;
        }

        .up {
            float:right;
        }

        .parameter {
            width: 500px;
        }

        .param {
            width: 500px;
            padding: 10px 0 0 20px;
            font-weight: bold;
        }

        .param-desc {
            width: 700px;
            padding: 0 0 0 20px;
            color: #777;
        }

        .param-type {
            font-style: italic;
        }

        .param-enum-header {
            width: 700px;
            padding: 0 0 0 60px;
            color: #777;
            font-weight: bold;
        }

        .param-enum {
            width: 700px;
            padding: 0 0 0 80px;
            color: #777;
            font-style: italic;
        }

        .field-label {
            padding: 0;
            margin: 0;
            clear: both;
        }

        .field-items	{
            padding: 0 0 15px 0;
            margin-bottom: 15px;
        }

        .return-type {
            clear: both;
            padding-bottom: 10px;
        }

        .param-header {
            font-weight: bold;
        }

        .method-tags {
            text-align: right;
        }

        .method-tag {
            background: none repeat scroll 0% 0% #24A600;
            border-radius: 3px;
            padding: 2px 10px;
            margin: 2px;
            color: #FFF;
            display: inline-block;
            text-decoration: none;
        }
    </style>

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">EasyAR API V1 </h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
        </div>
    </div>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2>Contacto</h2>
                <div class="app-desc">Correo: <a href="kuvickdabest@gmail.com">kuvickdabest@gmail.com</a></div>
                <div class="app-desc">Version: 1.0.0</div>
                <div class="app-desc">BasePath: {{ url('/')}}/api/v1</div>
                <div class="app-desc">Generado desde: https://swagger.io</div>

                <br>

                <h2><a name="__Methods">Methods</a></h2>
                [ Jump to <a href="#__Models">Models</a> ]

                <br>

                <h3>Table of Contents </h3>
                <div class="method-summary"></div>
                <h4><a href="#Qrcode">Qrcode</a></h4>
                <ul>
                    <li><a href="#qrcodeQrcodeUuidGet"><code><span class="http-method">get</span> /qrcode/{qrcode_uuid}</code></a></li>
                </ul>

                <h1><a name="Qrcode">Qrcode</a></h1>
                <div class="method"><a name="qrcodeQrcodeUuidGet"></a>
                    <div class="method-path">
                        <pre class="get"><code class="huge"><span class="http-method">get</span> /qrcode/{qrcode_uuid}</code></pre></div>
                    <div class="method-summary">Retorna un json con los datos del codigo qr (<span class="nickname">qrcodeQrcodeUuidGet</span>)</div>
                    <div class="method-notes">Retorna un json con la información obtenida desde el servidor del codigo qr</div>

                    <h3 class="field-label">Path parameters</h3>
                    <div class="field-items">
                        <div class="param">qrcode_uuid (required)</div>

                        <div class="param-desc"><span class="param-type">Path Parameter</span> &mdash; uuid del codigo qr </div>    </div>  <!-- field-items -->







                    <!--Todo: process Response Object and its headers, schema, examples -->

                    <h3 class="field-label">Example data</h3>
                    <div class="example-data-content-type">Content-Type: application/json</div>
                    <pre class="example"><code>{
              "name" : "Nombre codigo QR",
              "desc" : "Descripción codigo QR",
              "img_path" : "ieGhbbak6sDzWo1BQg7FIVUHEKFWVC4RaflfVWjg.png"
            }</code></pre>

                    <h3 class="field-label">Produces</h3>
                    This API call produces the following media types according to the <span class="header">Accept</span> request header;
                    the media type will be conveyed by the <span class="header">Content-Type</span> response header.
                    <ul>
                        <li><code>application/json</code></li>
                    </ul>

                    <h3 class="field-label">Responses</h3>
                    <h4 class="field-label">200</h4>

                    <a href="#"></a>
                </div> <!-- method -->
                <hr/>

                <h2><a name="__Models">Models</a></h2>
                [ Jump to <a href="#__Methods">Methods</a> ]

                <br>

                <h3>Table of Contents</h3>
                <ol>
                    <li><a href="#Institucion"><code>Institucion</code></a></li>
                    <li><a href="#Qr_codes"><code>Qr_codes</code></a></li>
                    <li><a href="#Roles"><code>Roles</code></a></li>
                    <li><a href="#Users"><code>Users</code></a></li>
                </ol>

                <div class="model">
                    <h3><a name="Institucion"><code>Institucion</code></a></h3>

                    <div class="field-items">
                        <div class="param">id </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  format: AUTO_INCREMENT</div>
                        <div class="param-desc"><span class="param-type">example: 1</span></div>
                        <div class="param">img_path (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: 1iM4cdjoBuD9q9PghjismSKq21WU8RkXZuXOEl5f.png</span></div>
                        <div class="param">name </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: Admin</span></div>
                        <div class="param">created_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                        <div class="param">updated_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                    </div>  <!-- field-items -->
                </div>
                <div class="model">
                    <h3><a name="Qr_codes"><code>Qr_codes</code></a></h3>

                    <div class="field-items">
                        <div class="param">id </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  format: AUTO_INCREMENT</div>
                        <div class="param-desc"><span class="param-type">example: 1</span></div>
                        <div class="param">name </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: Nombre codigo QR</span></div>
                        <div class="param">desc </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: Descripci贸n del codigo QR</span></div>
                        <div class="param">institucion_id </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: 1</span></div>
                        <div class="param">uuid </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: 7f3dfeb7-6dab-4356-8934-0544db5ca137</span></div>
                        <div class="param">img_path (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: ieGhbbak6sDzWo1BQg7FIVUHEKFWVC4RaflfVWjg.png</span></div>
                        <div class="param">qr_path (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: 7f3dfeb7-6dab-4356-8934-0544db5ca137.png</span></div>
                        <div class="param">created_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                        <div class="param">updated_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                    </div>  <!-- field-items -->
                </div>
                <div class="model">
                    <h3><a name="Roles"><code>Roles</code></a></h3>

                    <div class="field-items">
                        <div class="param">id </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  format: AUTO_INCREMENT</div>
                        <div class="param-desc"><span class="param-type">example: 1</span></div>
                        <div class="param">name </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: Admin</span></div>
                        <div class="param">guard_name </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: web</span></div>
                        <div class="param">created_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                        <div class="param">updated_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                    </div>  <!-- field-items -->
                </div>
                <div class="model">
                    <h3><a name="Users"><code>Users</code></a></h3>

                    <div class="field-items">
                        <div class="param">id </div><div class="param-desc"><span class="param-type"><a href="#integer">Integer</a></span>  format: AUTO_INCREMENT</div>
                        <div class="param-desc"><span class="param-type">example: 1</span></div>
                        <div class="param">name </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: Administrador</span></div>
                        <div class="param">email </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: admin@easyar.com</span></div>
                        <div class="param">email_verified_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                        <div class="param">password </div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: ************</span></div>
                        <div class="param">remember_token (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: Z1W3RwvVSPSkY69OZ7uYSVmVZBXsQNKxQmXWVKaZNgPIhGXuBA2Fl6zVOooQ</span></div>
                        <div class="param">profile_photo_path (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  </div>
                        <div class="param-desc"><span class="param-type">example: admin@easyar.com</span></div>
                        <div class="param">created_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                        <div class="param">updated_at (optional)</div><div class="param-desc"><span class="param-type"><a href="#string">String</a></span>  format: timestamp</div>
                        <div class="param-desc"><span class="param-type">example: 2021-10-28 07:51:44</span></div>
                    </div>  <!-- field-items -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
