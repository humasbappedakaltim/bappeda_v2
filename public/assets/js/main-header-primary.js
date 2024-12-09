// DROPDOWN //
function closeDropdown1(dropdownSelector, toggleSelector, chevronSelector) {
    const dropdown = document.querySelector(dropdownSelector);
    const toggle = document.querySelector(toggleSelector);
    const chevron = document.querySelector(chevronSelector);

    $(dropdown).collapse('hide');
    toggle.classList.remove('active');
    if (chevron) chevron.classList.remove('rotate');
}

function setupDropdowns(dropdownList) {
    const mainHeader = document.querySelector("#main-header");

    dropdownList.forEach(({ toggleSelector, dropdownSelector, chevronSelector }) => {
        const toggle = document.querySelector(toggleSelector);
        const dropdown = document.querySelector(dropdownSelector);
        const chevron = document.querySelector(chevronSelector);

        if (!dropdown.dataset.eventAttached) {
            dropdown.dataset.eventAttached = true;

            $(dropdown).on('shown.bs.collapse', () => {
                toggle.classList.add('active');
                if (chevron) chevron.classList.add('rotate');
                if (mainHeader && !mainHeader.classList.contains('dropdown-active')) {
                    mainHeader.classList.add('dropdown-active');
                }
            });

            $(dropdown).on('hidden.bs.collapse', () => {
                toggle.classList.remove('active');
                if (chevron) chevron.classList.remove('rotate');

                const anyDropdownOpen = dropdownList.some(({ dropdownSelector }) =>
                    document.querySelector(dropdownSelector).classList.contains('show')
                );
                if (!anyDropdownOpen && mainHeader.classList.contains('dropdown-active')) {
                    mainHeader.classList.remove('dropdown-active');
                }
            });
        }

        toggle.addEventListener("click", () => {
            dropdownList.forEach(({ dropdownSelector: otherDropdown, toggleSelector: otherToggle, chevronSelector: otherChevron }) => {
                if (dropdownSelector !== otherDropdown) {
                    closeDropdown1(otherDropdown, otherToggle, otherChevron);
                }
            });
        });
    });
}

const dropdownList = [
    {
        toggleSelector: "#profil-dropdown-toggle",
        dropdownSelector: "#profil-dropdown",
        chevronSelector: "#profil-dropdown-toggle .icon-chevron-down"
    },
    {
        toggleSelector: "#unit-kerja-dropdown-toggle",
        dropdownSelector: "#unit-kerja-dropdown",
        chevronSelector: "#unit-kerja-dropdown-toggle .icon-chevron-down"
    },
    {
        toggleSelector: "#agenda-dropdown-toggle",
        dropdownSelector: "#agenda-dropdown",
        chevronSelector: "#agenda-dropdown-toggle .icon-chevron-down"
    },
    {
        toggleSelector: "#berita-dropdown-toggle",
        dropdownSelector: "#berita-dropdown",
        chevronSelector: "#berita-dropdown-toggle .icon-chevron-down"
    },
    {
        toggleSelector: "#survei-dropdown-toggle",
        dropdownSelector: "#survei-dropdown",
        chevronSelector: "#survei-dropdown-toggle .icon-chevron-down"
    },
];

setupDropdowns(dropdownList);
// DROPDOWN END// 
