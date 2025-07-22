<!-- navbar-mobile.blade.php -->
<header x-data="{ mobileMenu: false, activeDropdown: null }" class="md:hidden bg-white">
    <!-- Header Logo & Burger -->
    <div class="bg-white shadow px-4 py-3 flex items-center justify-between fixed top-0 left-0 right-0 z-50 border-b border-red-800">

        <a href="/">
            <img src="{{ asset('images/logoheader.png') }}" alt="Logo Universitas Teknokrat Indonesia" class="h-14" />
        </a>
        <button @click="mobileMenu = !mobileMenu" class="focus:outline-none z-50 relative">
            <svg x-show="!mobileMenu" class="w-6 h-6 text-red-800" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="mobileMenu" class="w-6 h-6 text-red-800" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Content -->
    <div x-show="mobileMenu" x-transition class="fixed left-0 right-0 top-14 bg-red-800 max-h-[calc(60vh-3.5rem)] overflow-y-auto z-40">

        <nav class="px-6 pb-8 pt-10">
            <ul class="space-y-4 text-[17px] text-white font-semibold">
                <li><a href="/teknovelapp" class="block hover:text-yellow-300">Home</a></li>

                <!-- ABOUT -->
                <li>
                    <button @click="activeDropdown = activeDropdown === 'about' ? null : 'about'"
                        class="w-full flex justify-between items-center text-left text-white hover:text-yellow-300">
                        <span>About</span>
                        <svg class="w-4 h-4 transform transition-transform"
                            :class="{ 'rotate-180': activeDropdown === 'about' }" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Column 1 -->
                    <div x-show="activeDropdown === 'about'" x-transition
                        class="mt-2 grid grid-cols-1 md:grid-cols-4 gap-6 text-[15px] hover:text-yellow-300 font-normal pl-8 pb-4">
                        <!-- Column 1 -->
                        <div class="space-y-4">
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">About Teknokrat</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">History</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat
                                            Foundation</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Rector</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Executive Board</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Faculty Members</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Profile</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Privacy Policy</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Contact Us</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Why Teknokrat?</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Internationalization</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Enrichment Tracks</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Achievements</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Center of
                                            Excellence</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Career Path</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Student Community</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Facilities</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Graduate
                                            Opportunities</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Alumni</a></li>
                                </ul>
                            </div>

                            <!-- Column 3 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Quality</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Accreditation</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Quality Management
                                            Center</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">e-SPMI</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Legality and
                                            Recognition</a></li>
                                </ul>

                            </div>

                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Collaboration &
                                    Partnerships</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">HEI Overseas</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Industry</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Government</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Kerjasama</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Careers</a></li>
                                </ul>

                            </div>

                            <!-- Column 4 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Supporting Units</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Innovation &
                                            Entrepreneurship Center</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Research & Community
                                            Development</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Career & Training
                                            Center</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Student Development
                                            Center</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">SDGs Center</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </li>

                <!-- ADMISSION -->
                <li>
                    <button @click="activeDropdown = activeDropdown === 'admission' ? null : 'admission'"
                        class="w-full flex justify-between items-center text-left text-white hover:text-yellow-300">
                        <span>Admission</span>
                        <svg class="w-4 h-4 transform transition-transform"
                            :class="{ 'rotate-180': activeDropdown === 'admission' }" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="activeDropdown === 'admission'" x-transition
                        class="mt-2 space-y-1 text-[15px] text-gray-700 font-normal pl-8 pb-4">
                        <!-- Column 1 -->
                        <div class="space-y-4">
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Undergraduate Programs
                                </h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Registration</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Brochure</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Admissions
                                            Calendar</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Admissions
                                            Procedure</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Entry
                                            Requirements</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Tuition Fee</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Master's Programs</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Registration</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Brochure</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Admissions
                                            Procedure</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Tuition Fee</a></li>
                                </ul>

                            </div>
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">International Program
                                </h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat Global
                                            Connect</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- SCHOLARSHIP -->
                <li>
                    <button @click="activeDropdown = activeDropdown === 'scholarship' ? null : 'scholarship'"
                        class="w-full flex justify-between items-center text-left text-white hover:text-yellow-300">
                        <span>Scholarship</span>
                        <svg class="w-4 h-4 transform transition-transform"
                            :class="{ 'rotate-180': activeDropdown === 'scholarship' }" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul x-show="activeDropdown === 'scholarship'" x-transition
                        class="mt-2 pl-4 space-y-2 text-[15px] text-white font-normal">
                        <li><a href="#" class="block text-white hover:text-yellow-300">KIP-College Scholarship</a></li>
                        <li><a href="#" class="block text-white hover:text-yellow-300">Foundation Scholarship</a></li>
                    </ul>
                </li>

                <!-- PROGRAMS -->
                <li>
                    <button @click="activeDropdown = activeDropdown === 'programs' ? null : 'programs'"
                        class="w-full flex justify-between items-center text-left text-white hover:text-yellow-300">
                        <span>Programs</span>
                        <svg class="w-4 h-4 transform transition-transform"
                            :class="{ 'rotate-180': activeDropdown === 'programs' }" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="activeDropdown === 'programs'" x-transition
                        class="mt-2 space-y-1 text-[15px] text-white font-normal pl-8 pb-4">
                        <div class="space-y-4">
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Faculty of Engineering and
                                    Computer Science</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Information
                                            System</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Information
                                            Technology</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Electrical
                                            Engineering</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Computer
                                            Engineering</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Civil Engineering</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Informatics</a></li>
                                </ul>

                            </div>

                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mt-6 mb-3 uppercase">International Program
                                </h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat Global
                                            Connect</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Faculty of Arts and
                                    Education</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">English Education</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Mathematics
                                            Education</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Sports Education</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">English
                                            Literature</a></li>
                                </ul>

                            </div>
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mt-6 mb-3 uppercase">Faculty of Economics
                                    and Business</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Management</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Accounting</a></li>
                                </ul>

                            </div>

                            <!-- Column 3 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3 uppercase">Master Programs</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Master of English
                                            (S2)</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Magister of Computer
                                            Science (S2)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>


                <!-- SERVICES -->
                <li>
                    <button @click="activeDropdown = activeDropdown === 'services' ? null : 'services'"
                        class="w-full flex justify-between items-center text-left text-white hover:text-yellow-300">
                        <span>Services</span>
                        <svg class="w-4 h-4 transform transition-transform"
                            :class="{ 'rotate-180': activeDropdown === 'services' }" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul x-show="activeDropdown === 'services'" x-transition
                        class="mt-2 space-y-2 text-[15px] text-white font-normal pl-8 pb-4">
                        <div class="space-y-4">
                            <!-- Column 1 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3">GENERAL FACILITIES</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Publiser
                                        </a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Student
                                            Affairs</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat
                                            Card</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat TV</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat Virtual
                                            View</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Competence Based
                                            Tests</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Lapor Satgas
                                            PPKS</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Library
                                        </a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Encyclopedia
                                            Teknokrat</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat Student
                                            Park</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Teknokrat
                                            University Facilities</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Youtube
                                            Teknokrat</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Blogs</a></li>
                                </ul>
                            </div>

                            <!-- Column 3 -->
                            <div>
                                <h3 class="font-bold text-sm text-blue-400 mb-3">E-SERVICES</h3>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Online Learning
                                            (SPADA)</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">e-Parent</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">e-Perminjaman</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">e-Quality</a>
                                    </li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Slakad</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Cyber Security
                                            Team</a></li>
                                    <li><a href="#" class="hover:text-yellow-300 hover:underline text-white">Building
                                            Management Dashboard</a></li>
                                </ul>
                            </div>

                            <div>
                                <ul class="space-y-2 text-sm text-white">
                                    <li><a href="#"
                                            class="hover:text-yellow-300 hover:underline text-white">Massive
                                            Open Online Courses (MOOCs)</a></li>
                                    <li><a href="#"
                                            class="hover:text-yellow-300 hover:underline text-white">e-Presensi
                                            Ormawa</a>
                                    </li>
                                    <li><a href="#"
                                            class="hover:text-yellow-300 hover:underline text-white">e-Certificate</a>
                                    </li>
                                    <li><a href="#"
                                            class="hover:text-yellow-300 hover:underline text-white">e-Jurnal</a>
                                    </li>
                                    <li><a href="#"
                                            class="hover:text-yellow-300 hover:underline text-white">Repository</a>
                                    </li>
                                    <li><a href="#"
                                            class="hover:text-yellow-300 hover:underline text-white">Tracer
                                            Study</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>

                </li>
                <!-- Tambahan Link -->
                <li><a href="#" class="block text-white hover:text-yellow-300">News</a></li>
                <li><a href="#" class="block text-white hover:text-yellow-300">Festival 2025</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="pt-20"></div>