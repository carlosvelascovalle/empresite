<html xmlns="http://www.w3.org/1999/xhtml" xmlns:html="http://www.w3.org/TR/REC-html40"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:kml="http://www.opengis.net/kml/2.2"
    xmlns:atom="http://www.w3.org/2005/Atom">

<head>
    <title>Mapa del sitio XML - Empresite.org</title>
    <style type="text/css">
        body {
            font-size: 14px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            margin: 0;
            color: #545353;
        }

        a {
            color: #05809e;
            text-decoration: none;
        }

        h1 {
            font-size: 24px;
            font-family: Verdana, Geneva, sans-serif;
            font-weight: normal;
            margin: 0;
        }

        #description {
            background-color: #4275f4;
            padding: 20px 40px;
            color: #fff;
            padding: 30px 30px 20px;
        }

        #description h1,
        #description p,
        #description a {
            color: #fff;
            margin: 0;
            font-size: 1.1em;
        }

        #description h1 {
            font-size: 2em;
            margin-bottom: 1em;
        }

        #description p {
            margin-top: 5px;
        }

        #description a {
            border-bottom: 1px dotted;
        }

        #content {
            padding: 20px 30px;
            background: #fff;
            max-width: 75%;
            margin: 0 auto;
        }

        table {
            border: none;
            border-collapse: collapse;
            font-size: .9em;
            width: 100%;
        }

        th {
            background-color: #4275f4;
            color: #fff;
            text-align: left;
            padding: 15px 10px;
            font-size: 14px;
            cursor: pointer;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        table td a {
            display: block;
        }

        table td a img {
            max-height: 30px;
            margin: 6px 3px;
        }
    </style>
</head>

<body cz-shortcut-listen="true">
    <div id="description">
        <h1>Mapa del sitio XML</h1>
        <p>Aprende más acerca de <a href="http://sitemaps.org" target="_blank">mapas del sitio XML</a>. </p>
    </div>
    <div id="content">
        <p>
            Este índice de mapa del sitio XML contiene <strong>{{ count($empresas) }}</strong> mapas del sitio. </p>
        <table id="sitemap" cellpadding="3">
            <thead>
                <tr>
                    <th width="75%">Mapa del sitio</th>
                    <th width="25%">Última modificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ url('/') }}/empresa/{{ $empresa->denominacion }}</td>
                        <td>2023-01-01 19:24 +00:00</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="shadowMeasureIt"></div>
    <div id="divCoordMeasureIt"></div>
    <div id="divRectangleMeasureIt">
        <div id="divRectangleBGMeasureIt"></div>
    </div>
</body>

</html>
