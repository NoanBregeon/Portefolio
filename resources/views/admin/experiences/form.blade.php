<x-public-layout>
    <div class="pt-24 pb-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-white">{{ $experience->exists ? 'Modifier' : 'Ajouter' }} une expérience</h1>
            <a href="{{ route('admin.experiences.index') }}" class="text-indigo-400 hover:text-indigo-300">Retour</a>
        </div>

        <div class="bg-gray-800 rounded-lg shadow-xl border border-gray-700 p-6">
            <form action="{{ $experience->exists ? route('admin.experiences.update', $experience) : route('admin.experiences.store') }}" method="POST">
                @csrf
                @if($experience->exists)
                    @method('PUT')
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Titre du poste / formation <span class="text-red-500">*</span></label>
                        <input type="text" name="title" id="title" required value="{{ old('title', $experience->title) }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md py-2 px-3 text-white focus:ring-indigo-500 focus:border-indigo-500">
                        @error('title') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Company -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-300 mb-2">Entreprise ou École <span class="text-red-500">*</span></label>
                        <input type="text" name="company" id="company" required value="{{ old('company', $experience->company) }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md py-2 px-3 text-white focus:ring-indigo-500 focus:border-indigo-500">
                        @error('company') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Start Date -->
                    <div>
                        <label for="start_date" class="block text-sm font-medium text-gray-300 mb-2">Date de début</label>
                        <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $experience->start_date ? $experience->start_date->format('Y-m-d') : '') }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md py-2 px-3 text-white focus:ring-indigo-500 focus:border-indigo-500">
                        @error('start_date') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- End Date -->
                    <div>
                        <label for="end_date" class="block text-sm font-medium text-gray-300 mb-2">Date de fin (laisser vide si en cours)</label>
                        <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $experience->end_date ? $experience->end_date->format('Y-m-d') : '') }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md py-2 px-3 text-white focus:ring-indigo-500 focus:border-indigo-500">
                        @error('end_date') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="w-full bg-gray-900 border border-gray-700 rounded-md py-2 px-3 text-white focus:ring-indigo-500 focus:border-indigo-500">{{ old('description', $experience->description) }}</textarea>
                    @error('description') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Order -->
                    <div>
                        <label for="order" class="block text-sm font-medium text-gray-300 mb-2">Ordre d'affichage (0 = plus récent en premier) <span class="text-red-500">*</span></label>
                        <input type="number" name="order" id="order" required value="{{ old('order', $experience->order ?? 0) }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md py-2 px-3 text-white focus:ring-indigo-500 focus:border-indigo-500">
                        @error('order') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <!-- Icon -->
                    <div>
                        <label for="icon" class="block text-sm font-medium text-gray-300 mb-2">Optionnel : Classe icône SVG (ex: texte/couleur)</label>
                        <input type="text" name="icon" id="icon" value="{{ old('icon', $experience->icon) }}"
                            class="w-full bg-gray-900 border border-gray-700 rounded-md py-2 px-3 text-white focus:ring-indigo-500 focus:border-indigo-500" placeholder="ex: bg-indigo-900">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-md transition">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-public-layout>
