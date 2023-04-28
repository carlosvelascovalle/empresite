<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($empresas as $empresa)
        @php($slug = \Str::slug($empresa->denominacion, '-', 'es'))
        <url>
            <loc>{{ url('/') }}/{{ str_replace(' ', '-', strtolower($empresa->provincia)) }}/{{ $empresa->slug }}
            </loc>
            <lastmod>2023-01-01</lastmod>
        </url>
    @endforeach
</urlset>
