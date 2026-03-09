<x-public-layout>
    <div class="pt-24 pb-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-white">Gérer le Parcours</h1>
            <div class="flex gap-4">
                <a href="{{ route('admin.dashboard') }}" class="text-gray-400 hover:text-white transition mt-2">Retour</a>
                <a href="{{ route('admin.experiences.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition">Nouvelle Expérience</a>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-600 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-gray-800 rounded-lg shadow overflow-hidden border border-gray-700">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Ordre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Titre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Entreprise / École</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Période</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    @forelse($experiences as $experience)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-white">{{ $experience->order }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-white font-medium">{{ $experience->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $experience->company }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-400 text-sm">
                            {{ $experience->start_date ? $experience->start_date->format('m/Y') : '?' }} 
                            - 
                            {{ $experience->end_date ? $experience->end_date->format('m/Y') : 'Aujourd\'hui' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.experiences.edit', $experience) }}" class="text-indigo-400 hover:text-indigo-300 mr-3">Editer</a>
                            <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" class="inline-block" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette étape du parcours ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">
                            Aucune expérience dans le parcours.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-public-layout>
