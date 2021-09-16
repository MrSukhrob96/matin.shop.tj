@extends('_layouts.front.app')

@section('content')
<section id="contact" class="contact my-5 py-5">
    <div class="container" data-aos="fade-up"">
        <div class=" row mt-4">
        <div class="col-lg-6">
            <div class="row">
                <a href="" class="col-md-12">
                    <div class="info-box">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </i>
                        <h3>Суроғаи мо</h3>
                        <p>Ҷумҳурии Тоҷикистон, ш. Хуҷанд, кӯч. Шарқ 84</p>
                    </div>
                </a>
                <a href="" class="col-md-6">
                    <div class="info-box mt-3">
                        <i class="icon-envelope"></i></span>
                        <h3>Email</h3>
                        <p>info@matin.tj <br />&nbsp;</p>
                    </div>
                </a>
                <a href="" class="col-md-6">
                    <div class="info-box mt-3">
                        <i class="icon-phone"></i>
                        <h3>Телефон</h3>
                        <p>+(9923422)61-2-61<br />+(992 44) 630-0-630</p>
                    </div>
                </a>
            </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input 
							type="text" 
							name="name" 
							class="form-control" 
							id="name" 
							placeholder="Ном ва Насаб" 
							data-rule="minlen:4" 
							autocomplete="off"
							data-msg="На кам аз 4 аломат дошта бошад" 
						/>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input 
							type="email"
							class="form-control"
							name="email"
							id="email"
							placeholder="Your Email"
							data-rule="email"
							autocomplete="off"
							data-msg="Почтаи вуҷуддоштаро ворид намоед" 
						/>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input 
						type="text" 
						class="form-control" 
						name="subject" 
						id="subject" 
						placeholder="Мавзӯъи муроҷат" 
						data-rule="minlen:4" 
						autocomplete="off"
						data-msg="Мавзӯъи муроҷат на кам аз 10 ва на мӯл аз 20 аломат дошта бошад" 
					/>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea 
						class="form-control" 
						name="message" 
						rows="5" 
						data-rule="required" 
						autocomplete="off"
						data-msg="Хабари худро дароред" 
						placeholder="Хабар..."
					></textarea>
                    <div class="validate"></div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>

    </div>
    <div class="container mt-3" data-aos="fade-up"">
        <div class=" row">
        <a href="" class="col-md-3 pl-0 mb-4">
            <div class="info-box">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                    </svg>
                </i>
                <h3>TELEGRAM</h3>
            </div>
        </a>
        <a href="" class="col-md-3 mb-4">
            <div class="info-box">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </i>
                <h3>FACEBOOK</h3>
            </div>
        </a>
        <a href="" class="col-md-3 mb-4">
            <div class="info-box">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg>
                </i>
                <h3>WHATSAPP</h3>
            </div>
        </a>
        <a href="" class="col-md-3 mb-4">
            <div class="info-box">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                        <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                    </svg>
                </i>
                <h3>ONLINE CONSULTANT</h3>
            </div>
        </a>
    </div>
    </div>
</section>
@endsection