function showSection(sectionId) {
  let sections = document.querySelectorAll('.section');
  sections.forEach(function(section) {
    if (section.id !== 'home') {
      section.classList.add('hidden');
    }
  });
  if (sectionId !== 'home') {
    document.getElementById(sectionId).classList.remove('hidden');
  }
}