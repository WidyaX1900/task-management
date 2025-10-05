<x-layout>
    <h1 class="text-xl">My Projects</h1>
    <div class="my-4">
        <x-add-button id="createProjectBtn">New Project</x-add-button>
    </div>
    <div id="projectList">
        <x-card>
            <div class="flex items-start justify-between mb-4">
                <h2 class="font-bold">Project Title</h2>
                <x-badge type="warning">
                    <span class="material-icons me-1 text-sm">access_time_filled</span>
                    <span>Ongoing</span>
                </x-badge>
            </div>
            <p class="truncate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quis aperiam,
                repellat maiores officia quibusdam accusantium iusto. Excepturi, rerum nihil. Culpa libero, quasi
                numquam quidem quos cum, harum possimus, dolores repellendus impedit ipsa veniam nostrum quia rerum
                placeat eaque labore voluptates omnis modi voluptate pariatur ullam vero cupiditate. Quam sit quis
                mollitia deserunt aliquid, asperiores magni excepturi necessitatibus et ipsam expedita quasi fugiat
                laboriosam odio. Quia dicta corporis quisquam quas iste esse officia amet culpa earum! Dignissimos vitae
                consectetur perferendis aut illum, quasi iusto beatae? Similique deserunt quasi exercitationem, odio
                provident suscipit amet quisquam laboriosam quidem a fugit architecto, saepe sunt vel sequi voluptate
                veritatis quaerat dolor.</p>
        </x-card>
        <x-card>
            <div class="flex items-start justify-between mb-4">
                <h2 class="font-bold">Project Title</h2>
                <x-badge type="success">
                    <span class="material-icons me-1 text-sm">check_circle</span>
                    <span>Done</span>
                </x-badge>
            </div>
            <p class="truncate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quis aperiam,
                repellat maiores officia quibusdam accusantium iusto. Excepturi, rerum nihil. Culpa libero, quasi
                numquam quidem quos cum, harum possimus, dolores repellendus impedit ipsa veniam nostrum quia rerum
                placeat eaque labore voluptates omnis modi voluptate pariatur ullam vero cupiditate. Quam sit quis
                mollitia deserunt aliquid, asperiores magni excepturi necessitatibus et ipsam expedita quasi fugiat
                laboriosam odio. Quia dicta corporis quisquam quas iste esse officia amet culpa earum! Dignissimos vitae
                consectetur perferendis aut illum, quasi iusto beatae? Similique deserunt quasi exercitationem, odio
                provident suscipit amet quisquam laboriosam quidem a fugit architecto, saepe sunt vel sequi voluptate
                veritatis quaerat dolor.</p>
        </x-card>
        <x-card>
            <div class="flex items-start justify-between mb-4">
                <h2 class="font-bold">Project Title</h2>
                <x-badge type="danger">
                    <span class="material-icons me-1 text-sm">cancel</span>
                    <span>Cancel</span>
                </x-badge>
            </div>
            <p class="truncate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quis aperiam,
                repellat maiores officia quibusdam accusantium iusto. Excepturi, rerum nihil. Culpa libero, quasi
                numquam quidem quos cum, harum possimus, dolores repellendus impedit ipsa veniam nostrum quia rerum
                placeat eaque labore voluptates omnis modi voluptate pariatur ullam vero cupiditate. Quam sit quis
                mollitia deserunt aliquid, asperiores magni excepturi necessitatibus et ipsam expedita quasi fugiat
                laboriosam odio. Quia dicta corporis quisquam quas iste esse officia amet culpa earum! Dignissimos vitae
                consectetur perferendis aut illum, quasi iusto beatae? Similique deserunt quasi exercitationem, odio
                provident suscipit amet quisquam laboriosam quidem a fugit architecto, saepe sunt vel sequi voluptate
                veritatis quaerat dolor.</p>
        </x-card>
    </div>

    <x-my-modal id="createProjectModal">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold">Create Project</h2>
            <span id="closeIcon" class="material-icons text-2xl cursor-pointer">
                close
            </span>
        </div>
        <form action="" method="post">
            <x-input-container> 
                <label for="name">Project Name</label>
                <x-input-field type="text" id="name" placeholder="Project Name" />
            </x-input-container>
            <x-input-container>
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="8" placeholder="Description"
                    class="block w-full rounded bg-gray-800 mt-2"></textarea>
            </x-input-container>
            <div class="my-6">
                <button type="submit"
                    class="py-2 px-3 transition-all duration-75 bg-blue-600 active:bg-blue-800 active:scale-90 rounded font-bold flex justify-center items-center w-full">
                    Create Project
                </button>
            </div>
        </form>
    </x-my-modal>
</x-layout>
