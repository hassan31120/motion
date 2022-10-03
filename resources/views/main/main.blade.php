@extends('main.layouts.main')
@section('content')
    <!-- header background component-->

    <!--about us-->
    <div class="container abuoutUs_Js">
        <div class="row row d-flex justify-content-between mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card text-center textcardCSS">
                    <div class="card-body ">
                        <h1 class="card-title text-center fw-bold">من نحن</h1>
                        <h5 class="card-end text-end fw-bold fs-5"> نحن فريق متخصص يضم مجموعة من المبدعين في مجال تصميم وإنشاء
                            فيديو
                            موشن جرافيك نسعى جاهدين لتقديم أفضل خدمة بأحسن سعر وفي أقل مدة ممكنة في التنفيذ.
                        </h5>
                    </div>
                </div>
                <div class="card text-center textcardCSS">
                    <div class="card-body ">
                        <h2 class="card-title text-end fw-bold"> ما الذي يجعلنا أفضل خيار لك ؟</h2>
                        <strong>
                            <p class="card-end text-end fw-bold lh-base fs-5">
                                نعمل على إنتاج فيديو موشن يشمل بشكل أساسي:
                                - محتوي جذّاب، فعال ومناسب لنشاطك وخدماتك
                                - تميز في الإلقاء، نعمل على اختيار أفضل الأصوات من أجل تعليق صوتى عالي الجودة
                                - تنقل وتحريك للمقاطع بشكل سلس بحيث يضيف لمقطع الفيديو خاصتك لمسة واقعية
                            </p>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2 mb-2">
                <div class="img">
                    <img src="{{ asset('main/img/about-us.jpg') }}" alt="" />
                </div>
            </div>
        </div>

    </div>

    <!--section image-->
    <div class="view text-start">
        <img src="{{ asset($setting->image) }}" class="img-fluid" alt="sample image">
    </div>
    <!--service-->
    <h1 class="text-center pt-5 mb-5 fw-bold" id="services">اعمالنا</h1>
    <div class="container service_js">
        <div class="row d-flex justify-content-between">
            @foreach ($links as $link)
                <div class="col-lg-4 col-sm-6">
                    <div class="border rounded">
                        <div class="embed-responsive embed-responsive-16by9 rounded">
                            <iframe width="560" height="315" src="{{ $link->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!-- <img src="./img/img1.gif" alt="" class=" img-fluid  mt-4"> -->
                    </div>
                </div>
            @endforeach

        </div>
        <div class=" col-md-12 text-center mt-2">
            <a href="{{ route('videos')}}" class="btn btn-primary" role="button">المزيد</a>
        </div>
    </div>

    <!--اهمية الموشن-->
    <div class="container-fluid" id="motion" style="background-color:#ffa600; margin-bottom: -8px">
        <div class="container">
            <div class="row row d-flex justify-content-center mt-3" data-aos="fade-up" data-aos-offset="250" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-lg-5">
                    <div class="card text-center textcardCSS">
                        <div class="card-body ">
                            <h1 class="text-center text-light pt-5 mb-5 fw-bold" id="about_us">أهمية الموشن جرافيك</h1>
                            <h5 class="card-end text-end text-light fw-bold lh-lg"> يمثل محتوى جذاب ويعتبر حاليًا أفضل
                                طريقة للعرض؛ حيث يمكنك
                                وبكل سهولة مشاركة فيديوهات الموشن جرافيك في كافة منصات التواصل الاجتماعي
                                إلى جانب كونه أفضل وسيلة لجذب المزيد من العملاء وتعريفهم بخدماتك ومنتجاتك عبر فيديو قد
                                لا
                                تتجاوز مدته بضع دقائق.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-2 mb-2">
                    <div class="img img-fluid">
                        <img src="{{ asset('main/img/important.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
