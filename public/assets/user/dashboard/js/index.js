const dshSideBarOpen = document.querySelector('.dsh-sidebar-btn')
const dshSideBar = document.querySelector('.dashboard-side-bar')
const dshSideBarCls = document.querySelector('.dsh-sidebar-cls')

dshSideBarOpen.addEventListener('click' , () => {
    dshSideBar.classList.add('active')
})

dshSideBarCls.addEventListener('click' , () => {
    dshSideBar.classList.remove('active')
})