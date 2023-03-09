<x-app-layout title="Import Data">
    <div>
        <form method="POST" action="{{ route('inventaris.import') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" />
            <button type="submit">Upload</button>
            <a href="{{ route('inventaris.import') }}">
                <button>
                    Excel
                </button>
            </a>
        </form>
    </div>
</x-app-layout>
