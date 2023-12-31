    <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
        <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-285px] duration-1000 p-2 w-[285px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center rounded-md ">
                <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
                <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">Gestão Gym</h1>
                <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">

            <div>
                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-journal-check"></i>
                    <span class="text-[15px] ml-4 text-gray-200"><a href="{{ route('home') }}">Visão Geral</a></li>
                        </span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-people-fill"></i>
                    <span class="text-[15px] ml-4 text-gray-200"><a href="{{ route('user') }}">Alunos</a></li></span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-newspaper"></i>
                    <span class="text-[15px] ml-4 text-gray-200">Planos</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-coin"></i>
                    <span class="text-[15px] ml-4 text-gray-200">Financeiro</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-trophy"></i>
                    <span class="text-[15px] ml-4 text-gray-200">Treinos</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-gear"></i>
                    <div class="flex justify-between w-full items-center" onclick="dropDown()">
                        <span class="text-[15px] ml-4 text-gray-200">Configurações</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                </div>
                <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                    <span class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1"><a href="{{ route('type-user') }}">Tipo de Usuário</a></span>
                </div>

                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span class="text-[15px] ml-4 text-gray-200">Logout</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        function dropDown() {
            document.querySelector('#submenu').classList.toggle('hidden')
            document.querySelector('#arrow').classList.toggle('rotate-0')
        }
        dropDown()

        function Openbar() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
    </script>
