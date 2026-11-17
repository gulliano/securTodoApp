<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ma Todo List</title>
  <!-- Tailwind via CDN (pratique pour tester ; en production, utilisez le build Tailwind CLI) -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 flex items-start justify-center p-4 sm:p-8">

  <main class="w-full max-w-md bg-white rounded-2xl shadow-lg overflow-hidden">

    <!-- En-tête -->
    <header class="bg-indigo-600 px-6 py-5 text-white">
      <h1 class="text-2xl font-bold">Ma Todo List</h1>
      <p class="text-sm text-indigo-200 mt-1">Lundi 16 novembre</p>
    </header>

    <!-- Formulaire d'ajout -->
    <form class="flex gap-2 px-6 py-4 border-b border-slate-200">
      <input
        type="text"
        placeholder="Ajouter une tâche…"
        class="flex-1 rounded-lg border border-slate-300 px-3 py-2 text-sm placeholder-slate-400
               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
      />
      <button
        type="submit"
        class="flex items-center gap-1 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white
               hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
        Ajouter
      </button>
    </form>

    <!-- Liste des tâches -->
    <ul class="divide-y divide-slate-100">

      <!--
        MODÈLE D'UNE TÂCHE (à dupliquer) :
        pensez à changer l'id de l'input et les "for" des deux labels pour qu'ils restent identiques.
      -->
      <li class="group flex items-center gap-3 px-6 py-3 hover:bg-slate-50 transition">

        <!-- Case cachée qui porte l'état "réalisée" -->
        <input id="task-1" type="checkbox" class="peer sr-only" />

        <!-- Icône "réaliser" (cercle -> rond vert avec coche) -->
        <label
          for="task-1"
          title="Marquer comme réalisée"
          class="flex h-7 w-7 shrink-0 cursor-pointer items-center justify-center rounded-full
                 border-2 border-slate-300 text-white transition
                 hover:border-green-500 hover:bg-green-50
                 peer-checked:border-green-500 peer-checked:bg-green-500 peer-checked:hover:bg-green-600
                 peer-focus-visible:ring-2 peer-focus-visible:ring-green-400 peer-focus-visible:ring-offset-2
                 [&>svg]:opacity-0 peer-checked:[&>svg]:opacity-100"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </label>

        <!-- Texte de la tâche -->
        <label
          for="task-1"
          class="flex-1 cursor-pointer text-slate-700 transition peer-checked:text-slate-400 peer-checked:line-through"
        >
          Faire les courses
        </label>

        <!-- Icône "supprimer" -->
        <button
          type="button"
          title="Supprimer la tâche"
          aria-label="Supprimer la tâche"
          class="rounded-lg p-1.5 text-slate-300 transition
                 hover:bg-red-50 hover:text-red-500
                 focus:outline-none focus:ring-2 focus:ring-red-400
                 sm:opacity-0 sm:group-hover:opacity-100 sm:focus:opacity-100"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
        </button>
      </li>

      <!-- Tâche déjà réalisée (attribut "checked") -->
      <li class="group flex items-center gap-3 px-6 py-3 hover:bg-slate-50 transition">
        <input id="task-2" type="checkbox" checked class="peer sr-only" />
        <label
          for="task-2"
          title="Marquer comme réalisée"
          class="flex h-7 w-7 shrink-0 cursor-pointer items-center justify-center rounded-full
                 border-2 border-slate-300 text-white transition
                 hover:border-green-500 hover:bg-green-50
                 peer-checked:border-green-500 peer-checked:bg-green-500 peer-checked:hover:bg-green-600
                 peer-focus-visible:ring-2 peer-focus-visible:ring-green-400 peer-focus-visible:ring-offset-2
                 [&>svg]:opacity-0 peer-checked:[&>svg]:opacity-100"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </label>
        <label
          for="task-2"
          class="flex-1 cursor-pointer text-slate-700 transition peer-checked:text-slate-400 peer-checked:line-through"
        >
          Répondre aux e-mails
        </label>
        <button
          type="button"
          title="Supprimer la tâche"
          aria-label="Supprimer la tâche"
          class="rounded-lg p-1.5 text-slate-300 transition
                 hover:bg-red-50 hover:text-red-500
                 focus:outline-none focus:ring-2 focus:ring-red-400
                 sm:opacity-0 sm:group-hover:opacity-100 sm:focus:opacity-100"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
        </button>
      </li>

      <li class="group flex items-center gap-3 px-6 py-3 hover:bg-slate-50 transition">
        <input id="task-3" type="checkbox" class="peer sr-only" />
        <label
          for="task-3"
          title="Marquer comme réalisée"
          class="flex h-7 w-7 shrink-0 cursor-pointer items-center justify-center rounded-full
                 border-2 border-slate-300 text-white transition
                 hover:border-green-500 hover:bg-green-50
                 peer-checked:border-green-500 peer-checked:bg-green-500 peer-checked:hover:bg-green-600
                 peer-focus-visible:ring-2 peer-focus-visible:ring-green-400 peer-focus-visible:ring-offset-2
                 [&>svg]:opacity-0 peer-checked:[&>svg]:opacity-100"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </label>
        <label
          for="task-3"
          class="flex-1 cursor-pointer text-slate-700 transition peer-checked:text-slate-400 peer-checked:line-through"
        >
          Préparer la réunion de demain
        </label>
        <button
          type="button"
          title="Supprimer la tâche"
          aria-label="Supprimer la tâche"
          class="rounded-lg p-1.5 text-slate-300 transition
                 hover:bg-red-50 hover:text-red-500
                 focus:outline-none focus:ring-2 focus:ring-red-400
                 sm:opacity-0 sm:group-hover:opacity-100 sm:focus:opacity-100"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
        </button>
      </li>

    </ul>

    <!-- Pied de liste -->
    <footer class="flex items-center justify-between bg-slate-50 px-6 py-3 text-sm text-slate-500">
      <span>3 tâches</span>
      <div class="flex gap-1">
        <button type="button" class="rounded-md bg-indigo-100 px-3 py-1 font-medium text-indigo-700">Toutes</button>
        <button type="button" class="rounded-md px-3 py-1 hover:bg-slate-200 transition">À faire</button>
        <button type="button" class="rounded-md px-3 py-1 hover:bg-slate-200 transition">Terminées</button>
      </div>
    </footer>

  </main>

</body>
</html>