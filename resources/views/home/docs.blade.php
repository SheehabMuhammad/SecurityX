@extends('layouts.app')

@section('content')
        <div class="doc-body row">
            <div class="doc-content col-md-10 col-10" style="margin: 0 auto;">
                <div class="content-inner">
                    
                    <section id="installation-section" class="doc-section">
                        
                        <h2 class="section-title">Installation</h2>
                        <div id="step1" class="section-block">
                            <h3 class="block-title">Step One</h3>
                            <p>USB disks let you add unlimited storage to your desktop or laptop (especially laptops!) for movies, songs, images, backups, and other bulky data. USB thumbdrives and portable storage devices let you carry gigabytes of data with you. The USB interface means compatibility with almost every PC. And here's the problem: huge capacity, total portability, universal compatibility, and absolute indispensability work together to render your USB disks and devices especially vulnerable to viruses and other malware. USB Disk Security from SecurityX is an effective solution for securing your PC from infected USB disks and data. This easy-to-use shareware is widely compatible with antivirus programs and other security tools.</p>
                            <a href="{{ route('downloads') }}" class="btn btn-green" target="_blank"><svg class="svg-inline--fa fa-download fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg> Downloads</a>
                        

                        </div> <!--section-block-->


                        <div id="step2" class="section-block">
                            <h3 class="block-title">Step Two</h3>
                            <p>After downloading the software, Double click to open it. Installation wizard will start, it will ask for an API Token while installation. Go to API Token page from your dashboard. Click on add Token, fill in the form and hit add. You'll see your new API token on the list. Copy the token and paste it in your SecurityX desktop app.</p>
                            
                        </div><!--section-block-->
                        
                    </section><!--doc-section-->
                    
                </div><!--content-inner-->
            </div><!--doc-content-->
        </div>
@endsection

@section('extra.content')
<script>
    
(function ($) {
  // USE STRICT
  "use strict";

try {

} catch (error) {
    console.log(error);
}
})(jQuery);

</script>
@endsection