// DROPDOWN //
function closeDropdown(dropdownSelector, toggleSelector, chevronSelector) {
    const dropdown = document.querySelector(dropdownSelector);
    const toggle = document.querySelector(toggleSelector);
    const chevron = document.querySelector(chevronSelector);

    // Using Bootstrap 5 Collapse API
    const collapseInstance = new bootstrap.Collapse(dropdown, {
        toggle: false
    });
    collapseInstance.hide();

    toggle.classList.remove('active');
    if (chevron) chevron.classList.remove('rotate');
}

function setupDropdowns(dropdownList) {
    const mainHeader = document.querySelector("#main-header");

    dropdownList.forEach(({ toggleSelector, dropdownSelector, chevronSelector }) => {
        const toggle = document.querySelector(toggleSelector);
        const dropdown = document.querySelector(dropdownSelector);
        const chevron = document.querySelector(chevronSelector);

        // Bind collapse events only once
        if (!dropdown.dataset.eventAttached) {
            dropdown.dataset.eventAttached = true;

            // Use Bootstrap 5 collapse event listeners
            dropdown.addEventListener('show.bs.collapse', () => {
                toggle.classList.add('active');
                if (chevron) chevron.classList.add('rotate');
                if (mainHeader && !mainHeader.classList.contains('dropdown-active')) {
                    mainHeader.classList.add('dropdown-active');
                }
            });

            dropdown.addEventListener('hidden.bs.collapse', () => {
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

        toggle.addEventListener("click", (e) => {
            e.stopPropagation(); // Prevent the click from closing the dropdown immediately

            // Close all other dropdowns
            dropdownList.forEach(({ dropdownSelector: otherDropdown, toggleSelector: otherToggle, chevronSelector: otherChevron }) => {
                if (dropdownSelector !== otherDropdown) {
                    closeDropdown(otherDropdown, otherToggle, otherChevron);
                }
            });

            // Toggle the current dropdown's state (show or hide)
            const collapseInstance = new bootstrap.Collapse(dropdown);
            collapseInstance.toggle();
        });
    });

    // Close all dropdowns if clicked outside
    document.addEventListener("click", (e) => {
        if (!e.target.closest(".dropdown") && !e.target.closest("#main-header")) {
            dropdownList.forEach(({ dropdownSelector, toggleSelector, chevronSelector }) => {
                closeDropdown(dropdownSelector, toggleSelector, chevronSelector);
            });
        }
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
        toggleSelector: "#data-center-dropdown-toggle",
        dropdownSelector: "#data-center-dropdown",
        chevronSelector: "#data-center-dropdown-toggle .icon-chevron-down"
    },
    {
        toggleSelector: "#survei-dropdown-toggle",
        dropdownSelector: "#survei-dropdown",
        chevronSelector: "#survei-dropdown-toggle .icon-chevron-down"
    },
];

setupDropdowns(dropdownList);
// DROPDOWN END //
