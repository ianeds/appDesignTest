@extends ('contactTemplate')

@section ('nav')
<nav>
      <ul>
          <li><a href='/work'>Work</a></li>
          <li><a href='/contact' class="active">Contact</a></li>
        </ul>
</nav>
@stop

@section('content-work')

<div id="wrapper">
    <ul class="contact">
        <li class="primary">
            Apparent Design is a graphic design agency based in Maastricht, the Netherlands.
            <span class="blocky"><a href="tel:+310615197033">+31 (0)6 151 97 033</a><br>
            <a href="mailto:info@apparentdesign.com" target="_top" class=''>info@apparentdesign.com</a><br>
            <a href="mailto:info@apparentmarketing.com" target="_top" class=''>info@apparentmarketing.com</a></span></li>

        <li class="secondary">
            <span class=''>
            Minckelersstraat 18<br>
            6211 GX Maastricht</span>
            <span class='blocky'><span class='bold'>KVK</span> 65483820<br>
            <span class='bold'>BTW</span> NL366765899B01</span></li>
        </li>
       
    </ul>
</div>

@stop

@section('footer')
<footer>

</footer>
@stop