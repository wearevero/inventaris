<div class="fill-geistWhite bg-black text-geistWhite">
    
</div>

{{-- <script type='text/javascript'>
    window.onload = function() {
        window.print();
    }
</script> --}}

<x-app-layout title="Cetak Barcode">
    <span class="fill-geistWhite flex my-10 text-center px-10 border border-geistWhite bg-geistWhite p-3 rounded-lg">{!! DNS1D::getBarcodeHTML(1234567890, 'UPCA') !!}</span>
</x-app-layout>

