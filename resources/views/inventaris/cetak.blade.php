<x-app-layout title="Cetak barcode">
    {!! DNS1D::getBarcodeHTML($datas->kode, 'UPCA') !!}
    <button onclick="print()"
        class="bg-slate-500/10 text-slate-800 rounded-lg px-2 border-slate-800 hover:text-slate-500">Cetak
        Barcode</button>

    <script>
        $('.print').click(function() {
            window.print();
        });
    </script>
</x-app-layout>
