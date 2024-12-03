// * ||--------------------------------------------------------------------------------||
// * ||                      animation to show element when scroll                     ||
// * ||--------------------------------------------------------------------------------||

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);

// * ||--------------------------------------------------------------------------------||
// * ||                             for pagination elments education                   ||
// * ||--------------------------------------------------------------------------------||
const educationsPerPage = 10;
const educationList = document.querySelector(".education-list");
const educationItems = document.querySelectorAll(".education");
const educationPagination = document.querySelector(".education-pagination");
const educationPrevButton = educationPagination.querySelector(
    ".education-prev-button"
);
const educationNextButton = educationPagination.querySelector(
    ".education-next-button"
);
const educationPageNumbers = educationPagination.querySelector(
    ".education-page-numbers"
);

const totalEducationPages = Math.ceil(
    educationItems.length / educationsPerPage
);
let currentEducationPage = 1;

function displayEducationPage(pageNumber) {
    const startIndex = (pageNumber - 1) * educationsPerPage;
    const endIndex = startIndex + educationsPerPage;

    educationItems.forEach((education, index) => {
        if (index >= startIndex && index < endIndex) {
            education.style.display = "block";
        } else {
            education.style.display = "none";
        }
    });
}

function updateEducationPagination(pageNumber) {
    educationPageNumbers.textContent = `Page ${pageNumber} of ${totalEducationPages}`;
    educationPrevButton.disabled = pageNumber === 1;
    educationNextButton.disabled = pageNumber === totalEducationPages;
}

displayEducationPage(currentEducationPage);
updateEducationPagination(currentEducationPage);

educationPrevButton.addEventListener("click", () => {
    if (currentEducationPage > 1) {
        currentEducationPage--;
        displayEducationPage(currentEducationPage);
        updateEducationPagination(currentEducationPage);
    }
});

educationNextButton.addEventListener("click", () => {
    if (currentEducationPage < totalEducationPages) {
        currentEducationPage++;
        displayEducationPage(currentEducationPage);
        updateEducationPagination(currentEducationPage);
    }
});

// * ||--------------------------------------------------------------------------------||
// * ||                             for pagination elments works                       ||
// * ||--------------------------------------------------------------------------------||

const worksPerPage = 10;
const worksList = document.querySelector(".works-list");
const workItems = document.querySelectorAll(".works");
const worksPagination = document.querySelector(".works-pagination");
const worksPrevButton = worksPagination.querySelector(".works-prev-button");
const worksNextButton = worksPagination.querySelector(".works-next-button");
const worksPageNumbers = worksPagination.querySelector(".works-page-numbers");

const totalWorksPages = Math.ceil(workItems.length / worksPerPage);
let currentWorksPage = 1;

function displayWorksPage(pageNumber) {
    const startIndex = (pageNumber - 1) * worksPerPage;
    const endIndex = startIndex + worksPerPage;

    workItems.forEach((work, index) => {
        if (index >= startIndex && index < endIndex) {
            work.style.display = "block";
        } else {
            work.style.display = "none";
        }
    });
}

function updateWorksPagination(pageNumber) {
    worksPageNumbers.textContent = `Page ${pageNumber} of ${totalWorksPages}`;
    worksPrevButton.disabled = pageNumber === 1;
    worksNextButton.disabled = pageNumber === totalWorksPages;
}

displayWorksPage(currentWorksPage);
updateWorksPagination(currentWorksPage);

worksPrevButton.addEventListener("click", () => {
    if (currentWorksPage > 1) {
        currentWorksPage--;
        displayWorksPage(currentWorksPage);
        updateWorksPagination(currentWorksPage);
    }
});

worksNextButton.addEventListener("click", () => {
    if (currentWorksPage < totalWorksPages) {
        currentWorksPage++;
        displayWorksPage(currentWorksPage);
        updateWorksPagination(currentWorksPage);
    }
});

// * ||--------------------------------------------------------------------------------||
// * ||                             for pagination elments front end                   ||
// * ||--------------------------------------------------------------------------------||

const frontEndPerPage = 8;
const frontEndList = document.querySelector(".frontEnd-list");
const frontEndItems = document.querySelectorAll(".frontEnd");
const frontEndPagination = document.querySelector(".frontEnd-pagination");
const frontEndPrevButton = frontEndPagination.querySelector(
    ".frontEnd-prev-button"
);
const frontEndNextButton = frontEndPagination.querySelector(
    ".frontEnd-next-button"
);
const frontEndPageNumbers = frontEndPagination.querySelector(
    ".frontEnd-page-numbers"
);

const totalFrontEndPages = Math.ceil(frontEndItems.length / frontEndPerPage);
let currentFrontEndPage = 1;

function displayFrontEndPage(pageNumber) {
    const startIndex = (pageNumber - 1) * frontEndPerPage;
    const endIndex = startIndex + frontEndPerPage;

    frontEndItems.forEach((item, index) => {
        if (index >= startIndex && index < endIndex) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

function updateFrontEndPagination(pageNumber) {
    frontEndPageNumbers.textContent = `Page ${pageNumber} of ${totalFrontEndPages}`;
    frontEndPrevButton.disabled = pageNumber === 1;
    frontEndNextButton.disabled = pageNumber === totalFrontEndPages;
}

displayFrontEndPage(currentFrontEndPage);
updateFrontEndPagination(currentFrontEndPage);

frontEndPrevButton.addEventListener("click", () => {
    if (currentFrontEndPage > 1) {
        currentFrontEndPage--;
        displayFrontEndPage(currentFrontEndPage);
        updateFrontEndPagination(currentFrontEndPage);
    }
});

frontEndNextButton.addEventListener("click", () => {
    if (currentFrontEndPage < totalFrontEndPages) {
        currentFrontEndPage++;
        displayFrontEndPage(currentFrontEndPage);
        updateFrontEndPagination(currentFrontEndPage);
    }
});

// * ||--------------------------------------------------------------------------------||
// * ||                             for pagination elments back end                    ||
// * ||--------------------------------------------------------------------------------||

const backEndPerPage = 10;
const backEndList = document.querySelector(".backEnd-list");
const backEndItems = document.querySelectorAll(".backEnd");
const backEndPagination = document.querySelector(".backEnd-pagination");
const backEndPrevButton = backEndPagination.querySelector(
    ".backEnd-prev-button"
);
const backEndNextButton = backEndPagination.querySelector(
    ".backEnd-next-button"
);
const backEndPageNumbers = backEndPagination.querySelector(
    ".backEnd-page-numbers"
);

const totalBackEndPages = Math.ceil(backEndItems.length / backEndPerPage);
let currentBackEndPage = 1;

function displayBackEndPage(pageNumber) {
    const startIndex = (pageNumber - 1) * backEndPerPage;
    const endIndex = startIndex + backEndPerPage;

    backEndItems.forEach((item, index) => {
        if (index >= startIndex && index < endIndex) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

function updateBackEndPagination(pageNumber) {
    backEndPageNumbers.textContent = `Page ${pageNumber} of ${totalBackEndPages}`;
    backEndPrevButton.disabled = pageNumber === 1;
    backEndNextButton.disabled = pageNumber === totalBackEndPages;
}

displayBackEndPage(currentBackEndPage);
updateBackEndPagination(currentBackEndPage);

backEndPrevButton.addEventListener("click", () => {
    if (currentBackEndPage > 1) {
        currentBackEndPage--;
        displayBackEndPage(currentBackEndPage);
        updateBackEndPagination(currentBackEndPage);
    }
});

backEndNextButton.addEventListener("click", () => {
    if (currentBackEndPage < totalBackEndPages) {
        currentBackEndPage++;
        displayBackEndPage(currentBackEndPage);
        updateBackEndPagination(currentBackEndPage);
    }
});

// * ||--------------------------------------------------------------------------------||
// * ||                             for pagination elments workExperience              ||
// * ||--------------------------------------------------------------------------------||

const workExperiencePerPage = 9;
const workExperienceList = document.querySelector(".workExperience-list");
const workExperienceItems = document.querySelectorAll(".workExperience");
const workExperiencePagination = document.querySelector(
    ".workExperience-pagination"
);
const workExperiencePrevButton = workExperiencePagination.querySelector(
    ".workExperience-prev-button"
);
const workExperienceNextButton = workExperiencePagination.querySelector(
    ".workExperience-next-button"
);
const workExperiencePageNumbers = workExperiencePagination.querySelector(
    ".workExperience-page-numbers"
);

const totalWorkExperiencePages = Math.ceil(
    workExperienceItems.length / workExperiencePerPage
);
let currentWorkExperiencePage = 1;

function displayWorkExperiencePage(pageNumber) {
    const startIndex = (pageNumber - 1) * workExperiencePerPage;
    const endIndex = startIndex + workExperiencePerPage;

    workExperienceItems.forEach((item, index) => {
        if (index >= startIndex && index < endIndex) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}

function updateWorkExperiencePagination(pageNumber) {
    workExperiencePageNumbers.textContent = `Page ${pageNumber} of ${totalWorkExperiencePages}`;
    workExperiencePrevButton.disabled = pageNumber === 1;
    workExperienceNextButton.disabled = pageNumber === totalWorkExperiencePages;
}

displayWorkExperiencePage(currentWorkExperiencePage);
updateWorkExperiencePagination(currentWorkExperiencePage);

workExperiencePrevButton.addEventListener("click", () => {
    if (currentWorkExperiencePage > 1) {
        currentWorkExperiencePage--;
        displayWorkExperiencePage(currentWorkExperiencePage);
        updateWorkExperiencePagination(currentWorkExperiencePage);
    }
});

workExperienceNextButton.addEventListener("click", () => {
    if (currentWorkExperiencePage < totalWorkExperiencePages) {
        currentWorkExperiencePage++;
        displayWorkExperiencePage(currentWorkExperiencePage);
        updateWorkExperiencePagination(currentWorkExperiencePage);
    }
});
