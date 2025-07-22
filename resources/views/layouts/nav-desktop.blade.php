<!-- Header -->
<header class="bg-white shadow hidden md:block">
    <div class="max-w-7xl mx-auto flex items-center justify-between py-3 px-4">
        <div class="flex items-center space-x-3">
            <a href="/">
                <img src="{{ asset('images/logoheader.png') }}" alt="Logo Universitas Teknokrat Indonesia" class="h-14">
            </a>
        </div>
    </div>

    <nav class="bg-red-800 text-white">
        <div class="max-w-7xl mx-auto px-4 relative">
            <ul class="flex flex-wrap items-center justify-center text-sm">
                <!-- Home -->
                <li class="hover:bg-red-900 py-2 px-3">
                    <a href="/teknovelapp"
                        class="flex items-center space-x-1 px-2 py-1 rounded {{ request()->is('teknovelapp') ? 'bg-red-900' : 'hover:text-yellow-300' }}">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>

                <!-- About Dropdown -->
                <li class="hover:bg-red-900 py-2 px-3" x-data="{ open: false }" class="relative"
                    @mouseenter="open = true" @mouseleave="open = false">
                    <div @click="open = !open"
                        class="flex items-center space-x-1 px-2 py-1 cursor-pointer hover:text-yellow-300">
                        <i class="fas fa-university"></i> <span>About</span>
                        <svg class="ml-1 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-show="open" x-transition @mouseenter="open = true" @mouseleave="open = false"
                        class="fixed left-0 right-0 w-full bg-white text-black shadow-lg ring-1 ring-black/5 border border-gray-200 py-6 z-[100]"
                        style="display: none;">
                        <div class="max-w-7xl mx-auto px-4 grid grid-cols-5 gap-8">
                            <!-- Column 1 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">About Teknokrat</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">History</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat
                                            Foundation</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Rector</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Executive Board</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Faculty Members</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Profile</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Privacy Policy</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Contact Us</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Why Teknokrat?</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Internationalization</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Enrichment Tracks</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Achievements</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Center of
                                            Excellence</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Career Path</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Student Community</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Facilities</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Graduate
                                            Opportunities</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Alumni</a></li>
                                </ul>
                            </div>

                            <!-- Column 3 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Quality</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Accreditation</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Quality Management
                                            Center</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">e-SPMI</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Legality and
                                            Recognition</a></li>
                                </ul>

                            </div>

                            <div>
                                <h3 class="font-bold text-sm text-red-800  mb-3 uppercase">Collaboration &
                                    Partnerships</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">HEI Overseas</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Industry</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Government</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Kerjasama</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Careers</a></li>
                                </ul>

                            </div>

                            <!-- Column 4 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Supporting Units</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Innovation &
                                            Entrepreneurship Center</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Research & Community
                                            Development</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Career & Training
                                            Center</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Student Development
                                            Center</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">SDGs Center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Admission Dropdown -->
                <li class="hover:bg-red-900 py-2 px-3" x-data="{ open: false }" class="relative"
                    @mouseenter="open = true" @mouseleave="open = false">
                    <div @click="open = !open"
                        class="flex items-center space-x-1 px-2 py-1 cursor-pointer hover:text-yellow-300">
                        <i class="fas fa-edit"></i> <span>Admission</span>
                        <svg class="ml-1 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-show="open" x-transition @mouseenter="open = true" @mouseleave="open = false"
                        class="fixed left-0 right-0 w-full bg-white text-black shadow-lg ring-1 ring-black/5 border border-gray-200 py-6 z-[100]"
                        style="display: none;">
                        <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 gap-8">
                            <!-- Column 1 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Undergraduate Programs
                                </h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Registration</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Brochure</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Admissions
                                            Calendar</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Admissions
                                            Procedure</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Entry
                                            Requirements</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Tuition Fee</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Master's Programs</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Registration</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Brochure</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Admissions
                                            Procedure</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Tuition Fee</a></li>
                                </ul>

                            </div>
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">International Program
                                </h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat Global
                                            Connect</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Programs Dropdown -->
                <li class="hover:bg-red-900 py-2 px-3" x-data="{ open: false }" class="relative"
                    @mouseenter="open = true" @mouseleave="open = false">
                    <div @click="open = !open"
                        class="flex items-center space-x-1 px-2 py-1 cursor-pointer hover:text-yellow-300">
                        <i class="fas fa-book"></i> <span>Scholarship</span>
                        <svg class="ml-1 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-show="open" x-transition @mouseenter="open = true" @mouseleave="open = false"
                        class="fixed right-0 w-full bg-white text-black shadow-lg ring-1 ring-black/5 border border-gray-200 py-6 z-[100]"
                        style="display: none;">
                        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 gap-8">

                            <!-- Column 1 -->
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li><a href="#" class="hover:text-red-800 hover:underline">KIP-College
                                        Scholarship</a></li>
                                <li><a href="#" class="hover:text-red-800 hover:underline">Foundation
                                        Scholarship</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- Programs Dropdown -->
                <li class="hover:bg-red-900 py-2 px-3" x-data="{ open: false }" class="relative"
                    @mouseenter="open = true" @mouseleave="open = false">
                    <div @click="open = !open"
                        class="flex items-center space-x-1 px-2 py-1 cursor-pointer hover:text-yellow-300">
                        <i class="fas fa-book"></i> <span>Programs</span>
                        <svg class="ml-1 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-show="open" x-transition @mouseenter="open = true" @mouseleave="open = false"
                        class="fixed left-0 right-0 w-full bg-white text-black shadow-lg ring-1 ring-black/5 border border-gray-200 py-6 z-[100]"
                        style="display: none;">
                        <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 gap-8">
                            <!-- Column 1 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Faculty of Engineering and
                                    Computer Science</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Information
                                            System</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Information
                                            Technology</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Electrical
                                            Engineering</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Computer
                                            Engineering</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Civil Engineering</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Informatics</a></li>
                                </ul>

                                <h3 class="font-bold text-sm text-red-800 mt-6 mb-3 uppercase">International Program
                                </h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat Global
                                            Connect</a></li>
                                </ul>
                            </div>

                            <!-- Column 2 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Faculty of Arts and
                                    Education</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">English Education</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Mathematics
                                            Education</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Sports Education</a>
                                    </li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">English
                                            Literature</a></li>
                                </ul>

                                <h3 class="font-bold text-sm text-red-800 mt-6 mb-3 uppercase">Faculty of Economics
                                    and Business</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Management</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Accounting</a></li>
                                </ul>
                            </div>

                            <!-- Column 3 -->
                            <div>
                                <h3 class="font-bold text-sm text-red-800 mb-3 uppercase">Master Programs</h3>
                                <ul class="space-y-2 text-sm text-gray-700">
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Master of English
                                            (S2)</a></li>
                                    <li><a href="#" class="hover:text-red-800 hover:underline">Magister of Computer
                                            Science (S2)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Services Dropdown -->
                <li class="hover:bg-red-900 py-2 px-3" x-data="{ open: false }" class="relative"
                    @mouseenter="open = true" @mouseleave="open = false">
                    <div @click="open = !open"
                        class="flex items-center space-x-1 px-2 py-1 cursor-pointer hover:text-yellow-300">
                        <i class="fas fa-tv"></i> <span>Services</span>
                        <svg class="ml-1 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-show="open" x-transition @mouseenter="open = true" @mouseleave="open = false"
                        class="fixed left-0 right-0 w-full bg-white text-black shadow-lg ring-1 ring-black/5 border border-gray-200 py-6 z-[100]"
                        style="display: none;">
                        <div class="max-w-7xl mx-auto px-4">

                            <div class="grid grid-cols-4 gap-8">
                                <!-- Column 1 -->
                                <div>
                                    <h3 class="font-bold text-sm text-red-800 mb-3">GENERAL FACILITIES</h3>
                                    <ul class="space-y-2 text-sm text-gray-700">
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Publiser
                                            </a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Student
                                                Affairs</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat
                                                Card</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat TV</a>
                                        </li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat Virtual
                                                View</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Competence Based
                                                Tests</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Lapor Satgas
                                                PPKS</a></li>
                                    </ul>
                                </div>

                                <!-- Column 2 -->
                                <div>
                                    <ul class="space-y-2 text-sm text-gray-700">
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Library
                                            </a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Encyclopedia
                                                Teknokrat</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat Student
                                                Park</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Teknokrat
                                                University Facilities</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Youtube
                                                Teknokrat</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Blogs</a></li>
                                    </ul>
                                </div>

                                <!-- Column 3 -->
                                <div>
                                    <h3 class="font-bold text-sm text-red-800 mb-3">E-SERVICES</h3>
                                    <ul class="space-y-2 text-sm text-gray-700">
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Online Learning
                                                (SPADA)</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">e-Parent</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">e-Perminjaman</a>
                                        </li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">e-Quality</a>
                                        </li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Slakad</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Cyber Security
                                                Team</a></li>
                                        <li><a href="#" class="hover:text-red-800 hover:underline">Building
                                                Management Dashboard</a></li>
                                    </ul>
                                </div>

                                <div>
                                    <ul class="space-y-2 text-sm text-gray-700">
                                        <li><a href="#"
                                                class="hover:text-red-800 hover:underline text-sm text-gray-700">Massive
                                                Open Online Courses (MOOCs)</a></li>
                                        <li><a href="#"
                                                class="hover:text-red-800 hover:underline text-sm text-gray-700">e-Presensi
                                                Ormawa</a>
                                        </li>
                                        <li><a href="#"
                                                class="hover:text-red-800 hover:underline text-sm text-gray-700">e-Certificate</a>
                                        </li>
                                        <li><a href="#"
                                                class="hover:text-red-800 hover:underline text-sm text-gray-700">e-Jurnal</a>
                                        </li>
                                        <li><a href="#"
                                                class="hover:text-red-800 hover:underline text-sm text-gray-700">Repository</a>
                                        </li>
                                        <li><a href="#"
                                                class="hover:text-red-800 hover:underline text-sm text-gray-700">Tracer
                                                Study</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

                <!-- Static Links -->
                <li class="hover:bg-red-900 py-3 px-4"><a href="#"
                        class="flex items-center space-x-1 hover:text-yellow-300"><i class="fas fa-newspaper"></i>
                        <span>News</span></a></li>
                <li class="hover:bg-red-900 py-3 px-4"><a href="#"
                        class="flex items-center space-x-1 hover:text-yellow-300"><i class="fas fa-certificate"></i>
                        <span>Festival 2025</span></a></li>
            </ul>
        </div>
    </nav>
</header>