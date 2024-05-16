@extends('site.template')

@section('content')
    <main>
        <section class="py-8 grid grid-cols-1 px-4 lg:grid-cols-2 gap-4 bg-brand-blue text-white rounded-b-3xl">
            <div class="content-center">
                <img src="{{ asset('images/management.webp') }}" class="mx-auto" alt="Descrição da imagem" >
            </div>

            <div class="max-w-2xl mx-auto lg:order-first flex flex-col justify-center items-center">
                <h1 class="text-2xl font-bold text-center mb-4 lg:text-3xl 2xl:text-4xl">
                    O melhor gestor de processos
                </h1>
                <p class="text-lg text-center mb-0 mt-5">
                    Simplifique a gestão de fluxos de trabalho, identifique gargalos e aumente a eficiência operacional.
                    Com uma interface intuitiva e recursos avançados, nossa plataforma oferece controle total sobre seus
                    processos, desde a modelagem até a implementação e análise de desempenho. Aumente a produtividade
                    da sua equipe e leve sua empresa ao próximo nível com o Checar BPMN.
                </p>

                <form method="POST" action="{}" class="w-full space-y-4 lg:space-y-8 mt-5">
                    @csrf

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="border-r-2 border-gray-400 h-4/5 "></div>
                        </div>
                        <input type="text" id="name" name="name" placeholder="Nome" required
                            class="pl-12 py-3 rounded-md w-full text-black">
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                            <div class="border-r-2 border-gray-400 h-4/5 ml-2"></div>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Email" required
                            class="pl-12 py-3 rounded-md w-full text-black">
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="border-r-2 border-gray-400 h-4/5"></div>
                        </div>
                        <input type="tel" id="phone" name="phone" placeholder="Telefone" required
                            pattern="\(\d{2}\) \d{4,5}-\d{4}" title="Por favor, insira um número de telefone válido."
                            class="phone pl-12 py-3 rounded-md w-full text-black">
                    </div>

                    <div class="flex justify-center ">
                        <button type="submit"
                            class="text-white font-bold py-2 px-12 rounded-md bg-brand-blue-2 mt-4 md:mt-0">
                            Quero eficiência na minha gestão
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <section class="bg-white">
            <div class="mx-auto bg-brand-green flex flex-col rounded-t-3xl mt-8 md:flex-row py-16">
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('images/section-1.webp') }}" alt="Descrição da imagem" width="400" height="400">
                </div>
                <div class="w-full md:w-1/2 px-4 md:px-0 flex flex-col justify-center md:mr-12 lg:mr-40">
                    <h2 class="text-[#3E6E3C] text-2xl font-bold mb-4 mr-4 lg:text-3xl text-center md:text-left">
                        Criação dinâmica de fluxos e formulários
                    </h2>
                    <p>
                        Com nossa plataforma intuitiva, você pode projetar fluxos de trabalho personalizados que se adaptam
                        às necessidades específicas da sua empresa, agilizando operações e reduzindo erros. Além disso,
                        nossos formulários dinâmicos permitem uma interação fluida e intuitiva para os usuários, melhorando
                        a experiência e aumentando a produtividade. Simplifique a gestão de processos e eleve o desempenho
                        de sua equipe com o Checar BPMN.
                    </p>
                </div>
            </div>
            <div class="mx-auto bg-brand-light-blue flex flex-col md:flex-row py-16">
                <div class="w-full md:w-1/2 px-4 flex flex-col justify-center md:ml-12 lg:ml-40">
                    <h2 class="text-[#3D448D] text-2xl font-bold mb-4 lg:text-3xl">
                        Modelagem BPMN
                    </h2>
                    <p>
                        Aprimore a eficiência e a precisão dos seus processos criando e visualizando modelos BPMN
                        detalhados, permitindo uma compreensão clara e uma comunicação eficaz entre equipes. Além disso, a
                        modelagem do Checar proporciona uma visão abrangente do fluxo de trabalho, identificando áreas de
                        melhoria e oportunidades de otimização. Aproveite o poder da modelagem BPMN para impulsionar a
                        produtividade e a agilidade da sua organização.
                    </p>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('images/section-2.webp') }}" alt="Descrição da imagem" width="400" height="400">
                </div>
            </div>
            <div class="mx-auto bg-brand-red flex flex-col-reverse md:flex-row py-16">
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('images/section-3.webp') }}" alt="Descrição da imagem" width="400" height="400">
                </div>
                <div class="w-full md:w-1/2 px-4 md:px-0 flex flex-col justify-center md:mr-12 lg:mr-40">
                    <h2 class="text-[#691B18] text-2xl font-bold mb-4 lg:text-3xl">Criação de relatórios</h2>
                    <p class="text-white">
                        Com o Checar BPMN, você pode gerar relatórios detalhados e visualizações gráficas dos seus
                        processos, fornecendo insights valiosos sobre desempenho, eficiência e áreas de melhoria. Esses
                        relatórios personalizados permitem uma análise profunda do seu fluxo de trabalho, capacitando sua
                        equipe a tomar decisões informadas e estratégicas. Maximize a eficácia operacional e impulsione o
                        sucesso do seu negócio com nosso gerenciador BPMN e seus recursos avançados de geração de
                        relatórios.
                    </p>
                </div>
            </div>
            <div class="mx-auto bg-brand-orange flex flex-col-reverse md:flex-row justify-center rounded-b-3xl">
                <div class="w-full md:px-0 flex flex-col space-y-16 py-16">
                    <h2 class="text-[#BA5025] text-2xl font-bold lg:text-3xl text-center">
                        Gestão com níveis personalizados
                    </h2>
                    <p class="text-center px-4 sm:mx-32 lg:mx-80">
                        Potencialize a colaboração e controle de acesso em seus processos definindo diferentes níveis de
                        acesso e permissões para cada usuário, garantindo que apenas as pessoas certas tenham acesso às
                        informações relevantes. Isso proporciona segurança e confiabilidade, ao mesmo tempo que permite uma
                        colaboração eficiente e focada. Com a capacidade de personalizar os níveis de acesso de acordo com
                        as necessidades específicas de cada usuário, nossa plataforma oferece flexibilidade e controle total
                        sobre seus processos.
                    </p>

                    <div class="flex justify-center">
                        <a href="#send">
                            <button type="submit"
                                class="text-white bg-[#BA5025] font-bold py-2 px-12 rounded-md mt-4 md:mt-0">
                                Quero eficiência na minha gestão
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class=" mx-auto">
                <section id="casos-de-sucesso" class="py-8 mx-4 lg:mx-0">
                    <h1 class="text-2xl font-bold mb-4 lg:text-3xl text-center">Casos de sucesso</h1>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div
                                    class="max-w-md mx-auto bg-[#D9792266] bg-opacity-10 mb-12 rounded-xl shadow-md overflow-hidden md:max-w-4xl">
                                    <div class="md:flex p-8 md:space-x-8">
                                        <div class="md:flex-shrink-0">
                                            <img class="h-full w-full object-cover md:w-60 rounded"
                                                src="{{ asset('images/logo-lagoa-santa.webp') }}" alt="Descrição da imagem">
                                        </div>
                                        <div class="space-y-2">
                                            <h1 class="text-center text-xl font-medium">Prefeitura de Lagoa Santa</h1>
                                            <p class="mt-6 md:mt-0">
                                                A prefeitura de <b>Lagoa Santa</b> (MG) fez uso do Checar BPMN para a gestão
                                                e
                                                fiscalização de obras e manutenção da cidade. A plataforma permite que os
                                                cidadãos façam requerimentos através de uma denúncia informando o local, CEP
                                                e entregando um protocolo. Dentro da plataforma, o Checar permite que os
                                                usuários da prefeitura criem fluxos, ordem de serviço, formulários dinâmicos
                                                e façam relatórios das ações, além de acompanhar as tarefas de forma
                                                intuitiva em um histórico de ações.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="max-w-md mx-auto bg-[#D9792266] bg-opacity-10 mb-12 rounded-xl shadow-md overflow-hidden md:max-w-4xl">
                                    <div class="md:flex p-8 md:space-x-8">
                                        <div class="md:flex-shrink-0">
                                            <img class="h-full w-full object-cover md:w-60 rounded"
                                                src="{{ asset('images/logo-lagoa-santa.webp') }}" alt="Descrição da imagem">
                                        </div>
                                        <div class="space-y-2">
                                            <h1 class="text-center text-xl font-medium">Prefeitura de Lagoa Santa</h1>
                                            <p class="mt-6 md:mt-0">
                                                A prefeitura de <b>Lagoa Santa</b> (MG) fez uso do Checar BPMN para a gestão
                                                e
                                                fiscalização de obras e manutenção da cidade. A plataforma permite que os
                                                cidadãos façam requerimentos através de uma denúncia informando o local, CEP
                                                e entregando um protocolo. Dentro da plataforma, o Checar permite que os
                                                usuários da prefeitura criem fluxos, ordem de serviço, formulários dinâmicos
                                                e façam relatórios das ações, além de acompanhar as tarefas de forma
                                                intuitiva em um histórico de ações.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="max-w-md mx-auto bg-[#D9792266] bg-opacity-10 mb-12 rounded-xl shadow-md overflow-hidden md:max-w-4xl">
                                    <div class="md:flex p-8 md:space-x-8">
                                        <div class="md:flex-shrink-0">
                                            <img class="h-full w-full object-cover md:w-60 rounded"
                                                src="{{ asset('images/logo-lagoa-santa.webp') }}" alt="Descrição da imagem">
                                        </div>
                                        <div class="space-y-2">
                                            <h1 class="text-center text-xl font-medium">Prefeitura de Lagoa Santa</h1>
                                            <p class="mt-6 md:mt-0">
                                                A prefeitura de <b>Lagoa Santa</b> (MG) fez uso do Checar BPMN para a gestão
                                                e
                                                fiscalização de obras e manutenção da cidade. A plataforma permite que os
                                                cidadãos façam requerimentos através de uma denúncia informando o local, CEP
                                                e entregando um protocolo. Dentro da plataforma, o Checar permite que os
                                                usuários da prefeitura criem fluxos, ordem de serviço, formulários dinâmicos
                                                e façam relatórios das ações, além de acompanhar as tarefas de forma
                                                intuitiva em um histórico de ações.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next lg:mr-12 lg:block hidden"></div>
                        <div class="swiper-button-prev lg:ml-12 lg:block hidden"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>

                <style>
                    .swiper-pagination-bullet-active {
                        color: #fff;
                        background: #BA5025;
                    }

                    .swiper-button-next {
                        color: #BA5025
                    }

                    .swiper-button-prev {
                        color: #BA5025
                    }
                </style>

            </div>
        </section>

        <section id="send" class="bg-brand-blue rounded-t-3xl">
            <section id="formulario" class="grid grid-cols-1 py-8 px-4 lg:grid-cols-2 gap-4 text-white ">
                <div class="justify-self-center">
                    <img src="{{ asset('images/footer-img.webp') }}"
                        alt="Descrição da imagem">
                </div>
                <div class="max-w-2xl mx-auto flex flex-col justify-center items-center">
                    <h1 class="text-xl font-bold mb-4 lg:text-3xl 2xl:text-4xl">O melhor gestor de processos</h1>
                    <p class="text-lg text-center">
                        Simplifique a gestão de fluxos de trabalho, identifique gargalos e aumente a eficiência operacional.
                        Com uma interface intuitiva e recursos avançados, nossa plataforma oferece controle total sobre seus
                        processos, desde a modelagem até a implementação e análise de desempenho. Aumente a produtividade da
                        sua equipe e leve sua empresa ao próximo nível!
                    </p>

                    <form method="POST" action="{}" class="w-full space-y-4 mt-4 md:space-y-8">
                        @csrf

                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="border-r-2 border-gray-400 h-4/5 "></div>
                            </div>
                            <input type="text" id="name2" name="name" placeholder="Nome" required
                                class="pl-12 py-3 rounded-md w-full text-black">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                                <div class="border-r-2 border-gray-400 h-4/5 ml-2"></div>
                            </div>
                            <input type="email" id="email" name="email" placeholder="Email" required
                                class="pl-12 py-3 rounded-md w-full text-black">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="border-r-2 border-gray-400 h-4/5"></div>
                            </div>
                            <input type="tel" id="phone2" name="phone" placeholder="Telefone" required
                                pattern="\(\d{2}\) \d{4,5}-\d{4}" title="Por favor, insira um número de telefone válido."
                                class="phone pl-12 py-3 rounded-md w-full text-black">
                        </div>
                        <div class="flex justify-center ">
                            <button type="submit"
                                class="text-white bg-black font-bold py-2 px-12 bg-brand-blue-2 rounded-md mt-4 md:mt-0">
                                Quero eficiência na minha gestão
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <section id="duvidas" class="faq-section py-16 mx-4 lg:mx-0">
                <h1 class="text-2xl font-bold mb-4 lg:text-3xl text-center text-white">Dúvidas Frequentes</h1>
                <div
                    class="mx-auto mt-8 grid max-w-4xl divide-y divide-neutral-200 text-white border border-white rounded">
                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>Dúvida frequente dos usuários sobre o conteúdo da Landing Page?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tempus mauris, in
                                commodo ex interdum eu. Nunc egestas ut metus id blandit. Nunc sit amet blandit nisl.
                                Praesent eleifend ullamcorper dolor sit amet mattis. Duis accumsan nisi non orci tempor, et
                                pellentesque purus mollis. Pellentesque mollis lobortis lectus, eu ultricies diam sodales
                                eu. Vivamus dictum eros at augue ullamcorper, a ullamcorper nunc finibus.
                            </p>
                        </details>
                    </div>

                    <div class="p-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>Dúvida frequente dos usuários sobre o conteúdo da Landing Page?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tempus mauris, in
                                commodo ex interdum eu. Nunc egestas ut metus id blandit. Nunc sit amet blandit nisl.
                                Praesent eleifend ullamcorper dolor sit amet mattis. Duis accumsan nisi non orci tempor, et
                                pellentesque purus mollis. Pellentesque mollis lobortis lectus, eu ultricies diam sodales
                                eu. Vivamus dictum eros at augue ullamcorper, a ullamcorper nunc finibus.
                            </p>
                        </details>
                    </div>
                </div>

                <script>
                    document.querySelector('form').addEventListener('submit', function(e) {
                        // e.preventDefault();

                        document.getElementById('phone').value = document.getElementById('phone').value.replace(/\D/g, '');

                        var formData = new FormData(e.target);
                        for (var pair of formData.entries()) {
                            console.log(pair[0] + ', ' + pair[1]);
                        }
                    });

                    var swiper = new Swiper(".mySwiper", {
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        pagination: {
                            el: ".swiper-pagination",
                        },
                    });

                    window.onload = function() {
                        var nameInputs = ['name', 'name2'];
                        var emailInputs = ['email', 'email2'];
                        var phoneInputs = ['phone', 'phone2'];

                        nameInputs.forEach(function(id) {
                            var input = document.getElementById(id);
                            input.oninvalid = function(event) {
                                event.target.setCustomValidity('Por favor, insira seu nome.');
                            }
                            input.oninput = function(event) {
                                event.target.setCustomValidity('');
                            }
                        });

                        emailInputs.forEach(function(id) {
                            var input = document.getElementById(id);
                            input.oninvalid = function(event) {
                                event.target.setCustomValidity(input.validity.valueMissing ?
                                    'Por favor, preencha este campo.' :
                                    'Por favor, insira um email válido.');
                            }
                            input.oninput = function(event) {
                                event.target.setCustomValidity('');
                            }
                        });

                        phoneInputs.forEach(function(id) {
                            var input = document.getElementById(id);
                            input.oninvalid = function(event) {
                                event.target.setCustomValidity(input.validity.valueMissing ?
                                    'Por favor, preencha este campo.' :
                                    'Por favor, insira um número de telefone válido.');
                            }
                            input.oninput = function(event) {
                                event.target.setCustomValidity('');
                            }
                        });
                    }

                    document.addEventListener('DOMContentLoaded', function() {
                        document.querySelectorAll('details').forEach(function(details) {
                            details.addEventListener('toggle', function() {
                                details.parentElement.style.backgroundColor = details.open ? '#6495D0' :
                                    'transparent';
                            });
                        });
                    });

                    document.querySelectorAll('.phone').forEach(function(input) {
                        input.addEventListener('input', function(e) {
                            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
                            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
                            document.getElementById(input.id + '_raw').value = x[1] + x[2] + x[3];
                        });
                    });

                    document.addEventListener('DOMContentLoaded', function() {
                        const sendLink = document.querySelector('a[href="#send"]');
                        const sendSection = document.querySelector('#send');

                        if (sendLink) {
                            sendLink.addEventListener('click', function(event) {
                                event.preventDefault();
                                sendSection.scrollIntoView({
                                    behavior: 'smooth'
                                });
                            });
                        }
                    });
                </script>
            </section>
        </section>
    </main>
@endsection
