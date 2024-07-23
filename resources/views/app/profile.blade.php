@extends('layouts.app.app') @section('content')

<div class="flex flex-wrap gap-4 w-full">
    <div
        class="flex flex-col gap-6 w-full xl:w-[calc(50%-8px)] bg-white rounded-md border-[1px] border-slate-200 p-6 h-fit"
    >
        <div class="flex flex-col gap-2">
            <h2 class="text-lg font-medium text-black">Podstawowe dane</h2>
            <span class="text-xs text-gray-400 font-normal"
                >W tym miejscu możesz wyprowadzic lub zaktualizowac swoje dane
                pacjenta.</span
            >
        </div>

        <form
            action="{{ route('update-basic') }}"
            method="POST"
            class="flex flex-wrap gap-4"
        >
            @csrf @METHOD('POST')

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="birthday">Data urodzenia</label>
                <input
                    type="date"
                    name="birthday"
                    placeholder="Twoja waga"
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                    value="{{ auth()->user()->birthday }}"
                />
            </div>

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="gender">Płec</label>
                <select
                    name="gender"
                    id="gender"
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                >
                    <option value="">Wybierz płec</option>
                    <option value="male" {{ auth()->
                        user()->gender == 'male' ? 'selected' : ''}}>Męzczyzna
                    </option>
                    <option value="female" {{ auth()->
                        user()->gender == 'female' ? 'selected' : ''}}>Kobieta
                    </option>
                </select>
            </div>

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="weight"> Waga [kg] </label>
                <input
                    type="number"
                    name="weight"
                    placeholder="Twoja waga"
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                    value="{{ auth()->user()->weight }}"
                />
            </div>

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="height"> Wzrost [cm] </label>
                <input
                    type="number"
                    name="height"
                    placeholder="Twoja waga"
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                    value="{{ auth()->user()->height }}"
                />
            </div>
            <div class="w-full">
                <button
                    class="rounded-md bg-[#1860fc] text-white w-fit px-6 py-2 text-base"
                >
                    Zapisz
                </button>
            </div>
        </form>
    </div>
    <div
        class="flex flex-col gap-6 w-full xl:w-[calc(50%-8px)] bg-white rounded-md border-[1px] border-slate-200 p-6 h-fit"
    >
        <div class="flex flex-col gap-2">
            <h2 class="text-lg font-medium text-black">Ostatnie pomiary</h2>
            <span class="text-xs text-gray-400 font-normal"
                >W tym miejscu mozesz wprowadzac swoje ostatnie pomiary tętna,
                ciśnienia, czy saturacji krwi.</span
            >
        </div>

        <form action="#" method="POST" class="flex flex-wrap gap-4">
            @csrf @METHOD('POST')

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="measurement_date">Data pomiaru</label>
                <input
                    type="date"
                    name="measurement_date"
                    placeholder=""
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                    value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
                />
            </div>

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="blood_pressure">Ciśnienie krwi</label>
                <input
                    type="text"
                    name="blood_pressure"
                    placeholder="np. 120/60"
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                />
            </div>

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="heart_rate">Tętno</label>
                <input
                    type="number"
                    name="heart_rate"
                    placeholder="np. 60"
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                />
            </div>

            <div class="flex flex-col gap-1 w-44 text-sm">
                <label for="saturation"> Saturacja krwi </label>
                <input
                    type="number"
                    name="saturation"
                    placeholder="np. 99"
                    class="w-full rounded-md bg-[#FFF] border-[1px] border-slate-400 p-2"
                />
            </div>
            <div class="w-full flex flex-wrap gap-4">
                <button
                    class="rounded-md bg-[#1860fc] text-white w-fit px-6 py-2 text-base"
                >
                    Dodaj
                </button>
                <button
                    class="text-sm text-gray-600 px-6 py-2 bg-gray-100 rounded-md duration-200 hover:bg-gray-300"
                >
                    Historia pomiarów
                </button>
                <button
                    class="text-sm text-gray-600 px-6 py-2 bg-gray-100 rounded-md duration-200 hover:bg-gray-300"
                >
                    Eksport do .pdf
                </button>
            </div>
        </form>
    </div>
    <div
        class="flex flex-col gap-6 w-full xl:w-[calc(50%-8px)] bg-white rounded-md border-[1px] border-slate-200 p-6 h-fit"
    >
        <div class="flex flex-col gap-2">
            <h2 class="text-lg font-medium text-black">
                Dokumentacja medyczna
            </h2>
            <span class="text-xs text-gray-400 font-normal"
                >W tym miejscu mozesz przesłac pliki twojej dokumentacji
                medycznej.</span
            >
        </div>
    </div>
</div>

@endsection
