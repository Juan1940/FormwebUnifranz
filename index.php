<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>FORMWEB - Gestión Académica Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        .orange-gradient {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        }
        
        .career-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #e5e7eb;
        }

        .career-card:hover {
            transform: translateY(-10px);
            border-color: #f97316;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .image-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.85));
        }

        /* Estilos Adaptativos del Formulario Unifranz */
        .sideways-text {
            font-weight: 800;
            color: #ffffff;
            line-height: 1;
            text-transform: uppercase;
        }
        
        @media (min-width: 768px) {
            .sideways-text {
                writing-mode: vertical-rl;
                transform: rotate(180deg);
                font-size: 2rem;
            }
        }

        .unifranz-input-line {
            border-bottom: 1px solid #000;
            width: 100%;
            margin-top: 1.75rem;
            position: relative;
        }

        .unifranz-label {
            position: absolute;
            top: -1.2rem;
            left: 0;
            font-size: 0.75rem;
            font-weight: 700;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Optimización de tamaño de fuentes en Inputs en móviles para evitar Zoom automático en iOS/Android */
        .unifranz-input-line input, 
        .unifranz-input-line select {
            font-size: 16px !important;
        }
        @media (min-width: 768px) {
            .unifranz-input-line input, 
            .unifranz-input-line select {
                font-size: 0.875rem !important;
            }
        }

        .unifranz-checkbox-box {
            width: 16px;
            height: 16px;
            border: 2px solid #000;
            margin-right: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            flex-shrink: 0;
        }

        .unifranz-checkbox-box.checked {
            background-color: #000;
        }
        
        .unifranz-checkbox-box.checked i {
            display: block;
        }

        .unifranz-checkbox-box i {
            display: none;
            color: white;
            font-size: 10px;
        }

        .logo-nav {
            height: 35px;
        }
        @media (min-width: 768px) {
            .logo-nav {
                height: 40px;
            }
        }
        
        .logo-form {
            height: 50px;
        }
        @media (min-width: 768px) {
            .logo-form {
                height: 60px;
            }
        }
        
        .formweb-text {
            font-weight: 900;
            letter-spacing: -0.05em;
            font-size: 1.25rem;
        }
        @media (min-width: 768px) {
            .formweb-text {
                font-size: 1.5rem;
            }
        }

        /* Hover effects */
        .social-label:hover .unifranz-checkbox-box {
            border-color: #f97316;
        }
        .social-label:hover i.social-icon {
            color: #f97316;
        }
    </style>
</head>
<body class="bg-white text-slate-900 min-h-screen antialiased">

    <!-- Botón flotante WhatsApp (Responsivo) -->
    <a href="https://wa.me/59177370320" class="fixed bottom-4 right-4 md:bottom-6 md:right-6 bg-green-500 text-white w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center shadow-2xl z-[70] hover:bg-green-600 transition-all hover:-translate-y-1 group">
        <i class="fa-brands fa-whatsapp text-2xl md:text-3xl"></i>
        <span class="absolute right-16 bg-white text-green-600 px-4 py-1 rounded-lg text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity shadow-lg whitespace-nowrap hidden md:inline-block">¡Soporte 24/7!</span>
    </a>

    <!-- Navegación Profesional -->
    <nav class="bg-black text-white shadow-2xl sticky top-0 z-50 border-b border-orange-600/30">
        <div class="container mx-auto px-4 md:px-6 py-3 md:py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="flex items-center gap-2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNueB98W7SrimYwvcNgOW30xp_PZLvoZk-mA&s" alt="Logo UNIFRANZ" class="logo-nav object-contain rounded">
                    <span class="formweb-text">FORM<span class="text-orange-500">WEB</span></span>
                </div>
            </div>
            <div class="flex space-x-2 md:space-x-6 font-medium text-xs tracking-wider uppercase items-center">
                <a href="#catalogo" class="hidden sm:inline-block hover:text-orange-500 transition-colors py-2">Carreras</a>
                <a href="admin.php" class="bg-neutral-800 px-3 py-1.5 md:px-4 md:py-2 rounded-full text-[10px] md:text-xs font-bold hover:bg-neutral-700 transition">ADMIN</a>
                <a href="https://wa.me/59171502211" target="_blank" class="bg-orange-600 px-3 py-1.5 md:px-5 md:py-2 rounded-full text-[10px] md:text-xs font-bold hover:bg-orange-700 transition shadow-lg shadow-orange-600/20 inline-block">Contactar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative min-h-[500px] md:h-[600px] flex items-center justify-center overflow-hidden bg-black py-12 md:py-0">
        <div class="absolute inset-0 image-overlay"></div>
        
        <div class="relative z-10 text-center px-4 md:px-6 max-w-4xl mx-auto">
            <span class="text-orange-500 font-bold tracking-[0.2em] md:tracking-[0.3em] uppercase mb-3 text-xs md:text-sm block">Excelencia Académica</span>
            <h1 class="text-3xl md:text-6xl font-black text-white mb-4 md:mb-6 leading-tight">Forjando el futuro <br class="hidden md:inline"> de la <span class="text-orange-600">Educación</span></h1>
            <p class="text-sm md:text-lg text-slate-300 max-w-2xl mx-auto mb-8 md:mb-10 leading-relaxed">
                Plataforma integral de orientación y gestión universitaria de la UNIFRANZ. Conectamos talento con oportunidades académicas a través de <b>FORMWEB</b>.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 px-4 sm:px-0">
                <a href="#registro" class="bg-orange-600 text-white px-8 py-3.5 md:px-10 md:py-4 rounded-full font-bold hover:bg-orange-700 transition-all text-center shadow-lg shadow-orange-600/20 text-sm md:text-base">Iniciar Proceso</a>
                <a href="#catalogo" class="bg-transparent border-2 border-white text-white px-8 py-3.5 md:px-10 md:py-4 rounded-full font-bold hover:bg-white hover:text-black transition-all text-center text-sm md:text-base">Ver Oferta Académica</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 md:px-6 py-12 md:py-20">

        <!-- Sección 1: Catálogo Profesional -->
        <section id="catalogo" class="mb-20 md:mb-32">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 md:mb-16 gap-6">
                <div>
                    <h2 class="text-2xl md:text-4xl font-black mb-3">Oferta Académica</h2>
                    <div class="h-1.5 w-20 bg-orange-600"></div>
                </div>
                <div class="relative w-full md:w-96">
                    <input type="text" id="careerSearch" onkeyup="filterCareers()" placeholder="Buscar facultad o carrera..." class="w-full pl-12 pr-4 py-3.5 md:py-4 rounded-2xl border-2 border-slate-100 focus:border-orange-500 outline-none transition-all shadow-sm text-sm">
                    <i class="fas fa-search absolute left-4 top-4 md:top-5 text-slate-400"></i>
                </div>
            </div>
            
            <div id="careerGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Ciencias de la Salud -->
                <div class="career-card bg-white p-6 md:p-8 rounded-3xl group">
                    <div class="w-12 h-12 md:w-14 md:h-14 orange-gradient rounded-2xl flex items-center justify-center text-white text-xl md:text-2xl mb-5 md:mb-6">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-orange-600 transition uppercase tracking-tight">Ciencias de la Salud</h3>
                    <ul class="text-slate-500 text-xs md:text-sm space-y-2 mb-6">
                        <li>• Medicina</li>
                        <li>• Odontología</li>
                        <li>• Bioquímica y Farmacia</li>
                        <li>• Enfermería</li>
                    </ul>
                    <button onclick="showVideo('Ciencias de la Salud')" class="flex items-center text-[10px] md:text-xs font-bold tracking-widest uppercase hover:text-orange-600 transition">
                        Ver Detalles <i class="fas fa-arrow-right ml-2 text-orange-600"></i>
                    </button>
                </div>

                <!-- Ciencias Económicas -->
                <div class="career-card bg-white p-6 md:p-8 rounded-3xl group">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-black rounded-2xl flex items-center justify-center text-orange-500 text-xl md:text-2xl mb-5 md:mb-6">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-orange-600 transition uppercase tracking-tight">Económicas y Empresariales</h3>
                    <ul class="text-slate-500 text-xs md:text-sm space-y-2 mb-6">
                        <li>• Administración de Empresas</li>
                        <li>• Ingeniería Comercial</li>
                        <li>• Administración de Hotelería y Turismo</li>
                        <li>• Contaduría Pública</li>
                        <li>• Gastronomía y Artes Culinarias</li>
                    </ul>
                    <button onclick="showVideo('Empresariales')" class="flex items-center text-[10px] md:text-xs font-bold tracking-widest uppercase hover:text-orange-600 transition">
                        Ver Detalles <i class="fas fa-arrow-right ml-2 text-orange-600"></i>
                    </button>
                </div>

                <!-- Derecho y Sociales -->
                <div class="career-card bg-white p-6 md:p-8 rounded-3xl group">
                    <div class="w-12 h-12 md:w-14 md:h-14 orange-gradient rounded-2xl flex items-center justify-center text-white text-xl md:text-2xl mb-5 md:mb-6">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-orange-600 transition uppercase tracking-tight">Ciencias Jurídicas y Sociales</h3>
                    <ul class="text-slate-500 text-xs md:text-sm space-y-2 mb-6">
                        <li>• Derecho</li>
                        <li>• Psicología</li>
                        <li>• Periodismo</li>
                    </ul>
                    <button onclick="showVideo('Derecho y Sociales')" class="flex items-center text-[10px] md:text-xs font-bold tracking-widest uppercase hover:text-orange-600 transition">
                        Ver Detalles <i class="fas fa-arrow-right ml-2 text-orange-600"></i>
                    </button>
                </div>

                <!-- Diseño y Crossmedia -->
                <div class="career-card bg-white p-6 md:p-8 rounded-3xl group">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-black rounded-2xl flex items-center justify-center text-orange-500 text-xl md:text-2xl mb-5 md:mb-6">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-orange-600 transition uppercase tracking-tight">Diseño y Tecnologías Crossmedia</h3>
                    <ul class="text-slate-500 text-xs md:text-sm space-y-2 mb-6">
                        <li>• Arquitectura</li>
                        <li>• Publicidad y Marketing</li>
                        <li>• Diseño Gráfico y Prod. Crossmedia</li>
                    </ul>
                    <button onclick="showVideo('Diseño')" class="flex items-center text-[10px] md:text-xs font-bold tracking-widest uppercase hover:text-orange-600 transition">
                        Ver Detalles <i class="fas fa-arrow-right ml-2 text-orange-600"></i>
                    </button>
                </div>

                <!-- Ingeniería -->
                <div class="career-card bg-white p-6 md:p-8 rounded-3xl group">
                    <div class="w-12 h-12 md:w-14 md:h-14 orange-gradient rounded-2xl flex items-center justify-center text-white text-xl md:text-2xl mb-5 md:mb-6">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 group-hover:text-orange-600 transition uppercase tracking-tight">Facultad de Ingeniería</h3>
                    <ul class="text-slate-500 text-xs md:text-sm space-y-2 mb-6">
                        <li>• Ingeniería de Sistemas</li>
                    </ul>
                    <button onclick="showVideo('Ingeniería')" class="flex items-center text-[10px] md:text-xs font-bold tracking-widest uppercase hover:text-orange-600 transition">
                        Ver Detalles <i class="fas fa-arrow-right ml-2 text-orange-600"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Sección 2: Registro (Diseño de Experiencia Unifranz Ultra-Optimizado para Celulares) -->
        <section id="registro" class="max-w-5xl mx-auto bg-white shadow-2xl overflow-hidden border border-slate-100 flex flex-col md:flex-row mb-20 md:mb-32 rounded-[32px] md:rounded-[40px]">
            
            <!-- Bloque de Identidad: "Experiencia Unifranz" (Se adapta mágicamente de horizontal en móvil a vertical en PC) -->
            <div class="bg-gradient-to-br from-neutral-900 via-black to-neutral-900 text-white w-full md:w-32 p-5 md:p-6 flex flex-row md:flex-col justify-between items-center py-5 md:py-12 border-b-2 border-orange-500 md:border-b-0 md:border-r border-orange-600/20 relative group">
                <div class="absolute inset-0 bg-orange-600/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
                
                <div class="sideways-text text-sm sm:text-base md:text-3xl tracking-wider md:tracking-tighter uppercase font-extrabold flex items-center gap-2 md:gap-0">
                    <i class="fas fa-globe-americas text-orange-500 text-xs md:text-lg md:mb-3 md:transform md:-rotate-90 block"></i>
                    <span>Internacionalízate</span>
                </div>
                
                <div class="text-[9px] md:text-[10px] text-right md:text-center leading-tight font-black tracking-widest text-orange-500 uppercase bg-orange-500/10 md:bg-transparent px-2 py-1 md:p-0 rounded-md">
                    Experiencia <br class="hidden md:inline"> Unifranz
                </div>
            </div>

            <!-- Contenedor del Formulario -->
            <div class="flex-1 p-6 sm:p-8 md:p-14 bg-gradient-to-b from-slate-50/50 to-white">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 md:mb-12 gap-6 border-b border-slate-100 pb-6">
                    <div class="flex flex-col items-start">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcgz2Dgdwsn491FC4KXR3_GvciHEM9HcKX7g&s" alt="Logo UNIFRANZ Form" class="logo-form mb-2 object-contain filter drop-shadow-sm">
                        <span class="formweb-text text-black">FORM<span class="text-orange-600">WEB</span></span>
                    </div>
                    <div class="text-left sm:text-right">
                        <h2 class="text-2xl md:text-3xl font-black text-slate-800 tracking-tight">¡Hola al futuro!</h2>
                        <p class="text-xs max-w-[280px] mt-1.5 text-slate-500 font-medium leading-relaxed">
                            Completa tus datos para recibir toda la información sobre tu futura carrera a través de nuestra gestión de <b>UNIFRANZ</b>.
                        </p>
                    </div>
                </div>

                <form action="guardar.php" method="POST" onsubmit="handleForm(event)">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-8">
                        <div class="unifranz-input-line sm:col-span-2">
                            <span class="unifranz-label">Carrera de Interés</span>
                            <select required class="w-full bg-transparent outline-none py-1 text-sm font-semibold appearance-none cursor-pointer text-slate-800">
                                <option value="" disabled selected>Selecciona tu futuro...</option>
                                <optgroup label="Ciencias de la Salud">
                                    <option>Medicina</option>
                                    <option>Odontología</option>
                                    <option>Bioquímica y Farmacia</option>
                                    <option>Enfermería</option>
                                </optgroup>
                                <optgroup label="Ciencias Jurídicas y Sociales">
                                    <option>Derecho</option>
                                    <option>Psicología</option>
                                    <option>Periodismo</option>
                                </optgroup>
                                <optgroup label="Ciencias Económicas Y Empresariales">
                                    <option>Administración de Empresas</option>
                                    <option>Ingeniería Comercial</option>
                                    <option>Administración de Hotelería y Turismo</option>
                                    <option>Contaduría Pública</option>
                                </optgroup>
                                <optgroup label="Diseño Y Tecnologías Crossmedia">
                                    <option>Publicidad y Marketing</option>
                                    <option>Arquitectura</option>
                                    <option>Diseño Gráfico y Prod. Crossmedia</option>
                                </optgroup>
                                <optgroup label="Ingeniería">
                                    <option>Ingeniería de Sistemas</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="sm:col-span-2 relative">
                            <div id="wrapperSelectorCarrera" class="unifranz-input-line">
                                <span class="unifranz-label">Carrera de Interés 2</span>
                                <select id="carreraInteres2" onchange="checkOtrosOption(this.value)" class="w-full bg-transparent outline-none py-1 text-sm font-semibold appearance-none cursor-pointer text-slate-800">
                                    <option value="" disabled selected>Selecciona tu futuro...</option>
                                    <optgroup label="Ciencias de la Salud">
                                        <option>Medicina</option>
                                        <option>Odontología</option>
                                        <option>Bioquímica y Farmacia</option>
                                        <option>Enfermería</option>
                                    </optgroup>
                                    <optgroup label="Ciencias Jurídicas y Sociales">
                                        <option>Derecho</option>
                                        <option>Psicología</option>
                                        <option>Periodismo</option>
                                    </optgroup>
                                    <optgroup label="Ciencias Económicas Y Empresariales">
                                        <option>Administración de Empresas</option>
                                        <option>Ingeniería Comercial</option>
                                        <option>Administración de Hotelería y Turismo</option>
                                        <option>Contaduría Pública</option>
                                    </optgroup>
                                    <optgroup label="Diseño Y Tecnologías Crossmedia">
                                        <option>Publicidad y Marketing</option>
                                        <option>Arquitectura</option>
                                        <option>Diseño Gráfico y Prod. Crossmedia</option>
                                    </optgroup>
                                    <optgroup label="Ingeniería">
                                        <option>Ingeniería de Sistemas</option>
                                    </optgroup>
                                    <option value="Otros" class="font-bold text-black">Otros...</option>
                                </select>
                            </div>

                            <div id="wrapperOtrosCarrera" class="unifranz-input-line hidden border-black">
                                <span class="unifranz-label">Carrera de Interés 2</span>
                                <div class="flex items-center w-full">
                                    <span class="text-sm font-black text-black mr-1 select-none">Otros:</span>
                                    <input type="text" id="inputOtrosCarrera" placeholder="Escribe tu carrera..." class="flex-1 bg-transparent outline-none py-1 text-sm font-semibold text-black placeholder-slate-400"
                                        oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                                    <button type="button" onclick="regresarAlSelector()" class="text-xs text-slate-400 hover:text-black ml-2">
                                        <i class="fas fa-undo"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Nombre</span>
                            <input type="text" name="nombre" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Apellido Paterno</span>
                            <input type="text" name="apellido_paterno" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Apellido Materno</span>
                            <input type="text" name="apellido_materno" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Fecha de Nacimiento</span>
                            <input type="date" name="fecha_nacimiento" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Ciudad</span>
                            <input type="text" name="ciudad" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Género (M/F)</span>
                            <input type="text" name="genero" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                        </div>

                        <div class="sm:col-span-2 relative">
                            <div id="wrapperSelectorColegio" class="unifranz-input-line">
                                <span class="unifranz-label">Colegio</span>
                                <select id="colegioSeleccion" name="colegio" required onchange="checkOtrosColegio(this.value)" class="w-full bg-transparent outline-none py-1 text-sm font-semibold appearance-none cursor-pointer text-slate-800">
                                    <option value="" disabled selected>Selecciona tu colegio...</option>
                                    
                                    <optgroup label="Privados e Internacionales">
                                        <option>Colegio Alemán</option>
                                        <option>Santa Cruz International School (SCCS)</option>
                                        <option>Colegio Cambridge College</option>
                                        <option>Colegio de la Sierra</option>
                                        <option>Colegio Franco Boliviano</option>
                                        <option>Eagles School</option>
                                        <option>Saint George</option>
                                        <option>Colegio Mayor San Lorenzo</option>
                                        <option>Colegio Británico Santa Cruz</option>
                                        <option>Colegio Boliviano Americano (CBA)</option>
                                    </optgroup>

                                    <optgroup label="Tradición Académica y Científica">
                                        <option>Colegio Cristo Rey</option>
                                        <option>Colegio San Agustín</option>
                                        <option>Colegio Río Nuevo</option>
                                        <option>Colegio Mayor Santo Tomás de Aquino</option>
                                        <option>Colegio Isabel Saavedra</option>
                                        <option>Colegio Soria School</option>
                                    </optgroup>

                                    <optgroup label="Tradición Religiosa o Congregacionales">
                                        <option>Colegio La Salle</option>
                                        <option>Colegio Don Bosco</option>
                                        <option>Colegio Marista</option>
                                        <option>Colegio Bautista Boliviano Brasileño</option>
                                        <option>Colegio Cardenal Cushing</option>
                                        <option>Colegio María Auxiliadora</option>
                                        <option>Colegio Espíritu Santo</option>
                                        <option>Colegio Particular Católico Santa Cruz</option>
                                    </optgroup>

                                    <optgroup label="Fiscales Históricos y de Convenio">
                                        <option>Colegio Nacional Florida</option>
                                        <option>Colegio Cástulo Chávez</option>
                                        <option>Colegio Nacional Guido Villa Gómez</option>
                                        <option>Colegio Mariano Saucedo Sevilla</option>
                                        <option>Colegio Basilio de Cuéllar</option>
                                        <option>Unidad Educativa Josefina Bálsamo</option>
                                        <option>Unidad Educativa San Francisco de Asís Sur</option>
                                        <option>Unidad Educativa Otilia Vaca Díez</option>
                                        <option>Unidad Educativa Obispo Santistevan</option>
                                        <option>Unidad Educativa Coronel Marcelo Quiroga Santa Cruz</option>
                                    </optgroup>

                                    <optgroup label="Módulos de Distritos Populares">
                                        <option>U.E. Primero de Mayo</option>
                                        <option>U.E. 23 de Diciembre</option>
                                        <option>U.E. Tierras Nuevas El Carmen</option>
                                        <option>U.E. Julio Prado Montaño</option>
                                        <option>U.E. República Argentina</option>
                                        <option>U.E. Ceferino Namuncurá</option>
                                    </optgroup>

                                    <option value="Otros" class="font-bold text-black">Otros...</option>
                                </select>
                            </div>

                            <div id="wrapperOtrosColegio" class="unifranz-input-line hidden border-black">
                                <span class="unifranz-label">Colegio</span>
                                <div class="flex items-center w-full">
                                    <span class="text-sm font-black text-black mr-1 select-none">Otros:</span>
                                    <input type="text" name="otro_colegio" id="inputOtrosColegio" placeholder="Nombre de tu colegio..." class="flex-1 bg-transparent outline-none py-1 text-sm font-semibold text-black placeholder-slate-400"
                                        oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                                    <button type="button" onclick="regresarAlSelectorColegio()" class="text-xs text-slate-400 hover:text-black ml-2">
                                        <i class="fas fa-undo"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Curso</span>
                            <input type="text" name="curso" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ0-9\s]/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">WhatsApp</span>
                            <input type="text" name="whatsapp" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/\D/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Email de Contacto</span>
                            <input type="email" name="email" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Dirección (Zona)</span>
                            <input type="text" name="direccion" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Ref. Teléfono (Madre)</span>
                            <input type="text" name="telefono_madre" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/\D/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Nombre Ap (Madre)</span>
                            <input type="text" name="nombre_madre" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Ref. Teléfono (Padre)</span>
                            <input type="text" name="telefono_padre" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/\D/g, '')">
                        </div>

                        <div class="unifranz-input-line">
                            <span class="unifranz-label">Nombre Ap (Padre)</span>
                            <input type="text" name="nombre_padre" required class="w-full bg-transparent outline-none py-1 text-sm font-semibold text-slate-800"
                                oninput="this.value=this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '')">
                        </div>
                    </div>

                    <div class="mt-12 flex justify-center md:justify-end">
                        <button type="submit" class="w-full md:w-auto bg-black text-white px-8 py-4 md:px-10 md:py-5 text-center group hover:bg-orange-600 transition-all shadow-xl hover:shadow-orange-600/30 rounded-xl">
                            <p class="text-[0.65rem] leading-tight font-bold opacity-80 uppercase tracking-wider">Confirmar mi</p>
                            <p class="text-xl md:text-2xl font-black leading-none uppercase tracking-tight">Postulación</p>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer con el texto optimizado en blanco y negrita -->
    <footer class="bg-black text-white pt-12 pb-8 border-t border-orange-600/20">
        <div class="container mx-auto px-4 text-center">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="formweb-text opacity-40">FORM<span class="text-orange-500">WEB</span></span>
            </div>
            <p class="text-white font-bold text-[10px] md:text-xs uppercase tracking-[0.2em] leading-relaxed opacity-90">
                © 2026 UNIFRANZ - FORMWEB SOLUTIONS. <br class="sm:hidden"> Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <!-- Modal de Video Optimizado para Pantallas de Celular -->
    <div id="videoModal" class="fixed inset-0 bg-black/95 hidden z-[100] flex items-center justify-center p-4 md:p-6">
        <div class="bg-white rounded-[24px] md:rounded-[40px] w-full max-w-4xl overflow-hidden shadow-2xl">
            <div class="p-5 md:p-8 border-b flex justify-between items-center">
                <h3 id="videoTitle" class="text-lg md:text-2xl font-black text-black uppercase tracking-tight truncate mr-4"></h3>
                <button onclick="closeVideo()" class="text-slate-400 hover:text-red-500 transition p-1"><i class="fas fa-times text-lg md:text-xl"></i></button>
            </div>
            <div class="bg-black aspect-video flex items-center justify-center relative">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Detalle Carrera" class="absolute inset-0 w-full h-full object-cover opacity-30">
                <div class="relative z-10 text-center text-white px-4">
                    <div onclick="alert('Iniciando streaming exclusivo...')" class="w-14 h-14 md:w-16 md:h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-3 cursor-pointer hover:scale-110 transition shadow-lg shadow-orange-600/40">
                        <i class="fas fa-play ml-1 text-sm md:text-base"></i>
                    </div>
                    <p class="font-bold uppercase text-[9px] md:text-xs tracking-widest text-slate-300">Contenido exclusivo FORMWEB</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let puntajes = [88, 92, 76, 95, 82, 99, 70];
        let invitados = ["Lic. Roberto Arce", "Dra. Elena Vizcarra", "Ing. Mario Condori"];

        window.onload = () => { renderPuntajes(); renderInvitados(); };

        function checkOtrosOption(value) {
            const selectorWrapper = document.getElementById('wrapperSelectorCarrera');
            const otrosWrapper = document.getElementById('wrapperOtrosCarrera');
            const inputOtros = document.getElementById('inputOtrosCarrera');
            
            if (value === "Otros") {
                selectorWrapper.classList.add('hidden');
                otrosWrapper.classList.remove('hidden');
                inputOtros.setAttribute('required', 'required');
                inputOtros.focus();
            }
        }

        function regresarAlSelector() {
            const selectorWrapper = document.getElementById('wrapperSelectorCarrera');
            const otrosWrapper = document.getElementById('wrapperOtrosCarrera');
            const selector = document.getElementById('carreraInteres2');
            const inputOtros = document.getElementById('inputOtrosCarrera');
            
            otrosWrapper.classList.add('hidden');
            selectorWrapper.classList.remove('hidden');
            inputOtros.removeAttribute('required');
            inputOtros.value = "";
            selector.value = "";
        }

        function checkOtrosColegio(value) {
            const selectorWrapper = document.getElementById('wrapperSelectorColegio');
            const otrosWrapper = document.getElementById('wrapperOtrosColegio');
            const inputOtros = document.getElementById('inputOtrosColegio');
            
            if (value === "Otros") {
                selectorWrapper.classList.add('hidden');
                otrosWrapper.classList.remove('hidden');
                inputOtros.setAttribute('required', 'required');
                inputOtros.focus();
            }
        }

        function regresarAlSelectorColegio() {
            const selectorWrapper = document.getElementById('wrapperSelectorColegio');
            const otrosWrapper = document.getElementById('wrapperOtrosColegio');
            const selector = document.getElementById('colegioSeleccion');
            const inputOtros = document.getElementById('inputOtrosColegio');
            
            otrosWrapper.classList.add('hidden');
            selectorWrapper.classList.remove('hidden');
            inputOtros.removeAttribute('required');
            inputOtros.value = "";
            selector.value = "";
        }

        function filterCareers() {
            let input = document.getElementById('careerSearch').value.toLowerCase();
            let cards = document.querySelectorAll('.career-card');
            cards.forEach(card => {
                let text = card.innerText.toLowerCase();
                card.style.display = text.includes(input) ? "block" : "none";
            });
        }

        function showVideo(carrera) {
            document.getElementById('videoTitle').innerText = carrera;
            document.getElementById('videoModal').classList.remove('hidden');
        }

        function closeVideo() { document.getElementById('videoModal').classList.add('hidden'); }

        function handleForm(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const original = btn.innerHTML;
            btn.innerHTML = "<p class='text-xs font-bold uppercase py-2'>Procesando...</p>";
            btn.disabled = true;
            
            setTimeout(() => {
                alert("¡Postulación FORMWEB enviada con éxito! Un asesor se pondrá en contacto contigo.");
                btn.innerHTML = original;
                btn.disabled = false;
                e.target.reset();
                document.querySelectorAll('.unifranz-checkbox-box').forEach(cb => cb.classList.remove('checked'));
                regresarAlSelector();
                regresarAlSelectorColegio();
            }, 1500);
        }

        function toggleCheck(el) {
            const box = el.querySelector('.unifranz-checkbox-box');
            box.classList.toggle('checked');
        }

        function renderPuntajes() {
            const container = document.getElementById('arrayDisplay');
            container.innerHTML = "";
            puntajes.forEach(p => {
                container.innerHTML += `<div class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center bg-white border border-slate-200 rounded-xl font-bold text-black shadow-sm text-sm md:text-base">${p}</div>`;
            });
        }

        function sortPuntajes() {
            puntajes.sort((a, b) => b - a);
            renderPuntajes();
        }

        function renderInvitados() {
            const list = document.getElementById('guestList');
            list.innerHTML = "";
            invitados.forEach((guest, index) => {
                list.innerHTML += `<li class="bg-white p-3 rounded-xl flex justify-between items-center border border-slate-100 shadow-sm">
                    <span class="text-xs md:text-sm font-semibold text-slate-700">${guest}</span>
                    <button onclick="removeGuest(${index})" class="text-slate-300 hover:text-red-500 p-1"><i class="fas fa-trash-alt text-xs"></i></button>
                </li>`;
            });
        }

        function addGuest() {
            const input = document.getElementById('newGuest');
            if (input.value.trim() !== "") {
                invitados.unshift(input.value.trim());
                input.value = "";
                renderInvitados();
            }
        }

        function removeGuest(index) {
            invitados.splice(index, 1);
            renderInvitados();
        }
    </script>
</body>
</html>