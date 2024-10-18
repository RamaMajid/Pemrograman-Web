let taskList = [];
let editingIndex = null;
let deletingIndex = null;

document.getElementById('add-task-btn').addEventListener('click', addTask);

function addTask() {
    const taskInput = document.getElementById('new-task');
    const taskName = taskInput.value.trim();

    if (taskName === '') {
        alert('Please enter a task name');
        return;
    }

    taskList.push(taskName);
    taskInput.value = '';
    renderTasks();
}

// Fungsi untuk merender daftar tugas
function renderTasks() {
    const taskListContainer = document.getElementById('task-list');
    taskListContainer.innerHTML = '';

    taskList.forEach((task, index) => {
        const listItem = document.createElement('li');
        listItem.innerHTML = `
            <span class="task-name">${task}</span>
            <button class="edit-btn" onclick="openEditPopup(${index})"><i class="fas fa-pencil-alt"></i></button>
            <button class="delete-btn" onclick="openDeletePopup(${index})"><i class="fas fa-trash"></i></button>
        `;
        taskListContainer.appendChild(listItem);
    });
}

function openEditPopup(index) {
    editingIndex = index;
    document.getElementById('edit-task-input').value = taskList[index];
    document.getElementById('edit-popup').style.display = 'flex';
}

document.getElementById('save-edit-btn').addEventListener('click', saveEditTask);

function saveEditTask() {
    const newTaskName = document.getElementById('edit-task-input').value.trim();
    
    if (newTaskName === '') {
        alert('Task name cannot be empty');
        return;
    }

    taskList[editingIndex] = newTaskName;
    closeEditPopup();
    renderTasks();
}

// Fungsi untuk menutup popup edit tanpa menyimpan
document.getElementById('cancel-edit-btn').addEventListener('click', closeEditPopup);

function closeEditPopup() {
    document.getElementById('edit-popup').style.display = 'none';
}

// Fungsi untuk membuka popup konfirmasi hapus
function openDeletePopup(index) {
    deletingIndex = index;
    document.getElementById('confirm-delete-popup').style.display = 'flex';
}

document.getElementById('confirm-delete-btn').addEventListener('click', deleteTask);

function deleteTask() {
    taskList.splice(deletingIndex, 1);
    closeDeletePopup();
    renderTasks();
}

document.getElementById('cancel-delete-btn').addEventListener('click', closeDeletePopup);

function closeDeletePopup() {
    document.getElementById('confirm-delete-popup').style.display = 'none';
}
