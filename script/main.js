const buttonOpenViewUsers = document.querySelector('#buttonOpenViewUsers'), // Open button
      buttonCloseViewUsers = document.querySelector('#buttonCloseViewUsers'), // CLose Button
      viewUsersModal = document.querySelector('#viewUsers'); // Modal window

const buttonOpenAddUser = document.querySelector('#buttonOpenAddUser'),
      buttonCloseAddUser = document.querySelector('#buttonCloseAddUser'),
      addUserModal = document.querySelector('#addUser');

buttonOpenViewUsers.addEventListener('click', function () { // Присвоение эвента "клик", кнопке
    viewUsersModal.classList.add('window-active'); // добавление класса, модальному окну
})

buttonCloseViewUsers.addEventListener('click', function () {
    viewUsersModal.classList.remove('window-active');
})


buttonOpenAddUser.addEventListener('click', function () {
    addUserModal.classList.add('window-active');
})

buttonCloseAddUser.addEventListener('click', function () {
    addUserModal.classList.remove('window-active');
})
