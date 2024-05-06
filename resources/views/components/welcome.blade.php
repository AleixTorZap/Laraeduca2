<div class="bg-white shadow-md rounded-md p-6 lg:p-8 mb-6">
    <h1 class="text-3xl font-semibold text-gray-900 mb-4">Panel de Control</h1>
    <p class="text-gray-600">Bienvenido a tu panel de control personalizado.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
    <!-- Sección de Usuarios -->
    <div class="bg-white shadow-md rounded-md p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Usuarios</h2>
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-600 text-sm">Total de Usuarios</p>
                <p class="text-2xl font-semibold text-gray-900">1000</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Usuarios Activos</p>
                <p class="text-2xl font-semibold text-gray-900">800</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Usuarios Inactivos</p>
                <p class="text-2xl font-semibold text-gray-900">200</p>
            </div>
        </div>
    </div>

    <!-- Sección de Ingresos -->
    <div class="bg-white shadow-md rounded-md p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Ingresos</h2>
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-600 text-sm">Ingresos Totales</p>
                <p class="text-2xl font-semibold text-gray-900">$50,000</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Ingresos Mensuales</p>
                <p class="text-2xl font-semibold text-gray-900">$5,000</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Ingresos Anuales</p>
                <p class="text-2xl font-semibold text-gray-900">$60,000</p>
            </div>
        </div>
    </div>

    <!-- Sección de Ventas -->
    <div class="bg-white shadow-md rounded-md p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Ventas</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class="text-gray-600 text-sm">Ventas Mensuales</p>
                <p class="text-lg font-semibold text-gray-900">$15,000</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Promedio de Venta</p>
                <p class="text-lg font-semibold text-gray-900">$500</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Total de Clientes</p>
                <p class="text-lg font-semibold text-gray-900">150</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Productos Vendidos</p>
                <p class="text-lg font-semibold text-gray-900">300</p>
            </div>
        </div>
    </div>

    <!-- Sección de Gastos -->
    <div class="bg-white shadow-md rounded-md p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Gastos</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class="text-gray-600 text-sm">Gastos Mensuales</p>
                <p class="text-lg font-semibold text-gray-900">$10,000</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Promedio de Gasto</p>
                <p class="text-lg font-semibold text-gray-900">$300</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Total de Categorías</p>
                <p class="text-lg font-semibold text-gray-900">5</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Gasto más alto</p>
                <p class="text-lg font-semibold text-gray-900">$1,500</p>
            </div>
        </div>
    </div>

    <!-- Sección de Calendario -->
    <div class="bg-white shadow-md rounded-md p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Calendario</h2>
        <Calendar />
    </div>
       <!-- Sección de Estadísticas -->
       <div class="bg-white shadow-md rounded-md p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Estadísticas</h2>
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Categoría</th>
                    <th class="px-4 py-2">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">Estadística 1</td>
                    <td class="border px-4 py-2">Valor 1</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Estadística 2</td>
                    <td class="border px-4 py-2">Valor 2</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </div>
</div>

{{-- 
@script
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid'],
            events: [
                {
                    title: 'Evento 1',
                    start: '2024-05-01'
                },
                {
                    title: 'Evento 2',
                    start: '2024-05-05',
                    end: '2024-05-07'
                },
                // Otros eventos...
            ]
        });

        calendar.render();
    });
</script>
@endscript --}}