@extends('layouts.master')
@section('title', 'Home')
@section('content')


<section id="contact" style="padding-top:100px" ;>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Contact Us</h1>
                <form id="contact" action="" method="post">
                    <h4>Contact us today, and get reply with in 24 hours!</h4>
                    <div class="form-group col-5">
                        <label for="name">Nama</label>
                        <input id="name" type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group col-5">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="form-group col-5">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" name="phone">
                    </div>

                    <div class="form-group col-5">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi">
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalCareer" tabindex="-1" role="dialog" aria-labelledby="modalCareerLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="font-family: 'Gotham-Book';">

            <div class="modal-body">
                <div class="col">
                    <div style="text-align: justify; line-height: 20pt;">To avoid frauds regarding prospective workers recruitment and selection conducted by irresponsible parties on behalf of PT Tigaraska Satria, Tbk., we hereby declare,<br /><br /></div>
                    <div style="text-align: justify;">
                        <ol style="margin-left: 20px; line-height: 20pt;">
                            <li>PT Tigaraksa Satria, Tbk. only advertise a job vacancy that correlates with company business.</li>
                            <li>Official information regarding job vacancy in PT Tigaraksa Satria, Tbk. can be discovered in the official website&rsquo;s Job Vacancy Page (tigaraksa.co.id/career),&nbsp; as well as other job vacancy online sites including <a href="http://www.jobstreet.com">www.jobstreet.com</a>&nbsp; which have cooperated with PT Tigaraksa Satria, Tbk. as of now</li>
                            <li>In the implementation of recruitment and selection, PT Tigaraksa Satria, Tbk. applied no charge to the applicants.</li>
                            <li>PT Tigaraksa Satria, Tbk. is not responsible for the disadvantaged parties in reference to the frauds conducted with the identity of the company.</li>
                            <li>For further explanations regarding recruitment and selection process of PT Tigaraksa Satria, call our Recruitment Team at 021-2527300.</li>
                        </ol>
                    </div>
                    <div style="text-align: justify; line-height: 20pt;">We encourage our future applicants and the public to be more cautious suppose the frauds regarding prospective workers recruitment and selection on behalf of PT Tigaraska Satria, Tbk. <br /><br />Thank you.<br /><br />HRM PT Tigaraksa Satria, Tbk.<br />E-mail: <a href="mailto:hr-recruitment@tigaraksa.co.id">hr-recruitment@tigaraksa.co.id</a>
                        <!-- <br /><img style="width: 30px;height: 30px;" src="image/assets/WhatsApp_icon.png"> : 0821 1177 9767 (WhatsApp Only) -->
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <a href="https://www.tigaraksa.co.id/career" class="btn btn-primary">Continue</a>
            </div>

        </div>
    </div>
</div>



@endsection