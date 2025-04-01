// Função para gerenciar rolagem (baseado no useScroll)
function setupScrollHandler({ headerId, fixedClass, scrollThreshold }) {
  const header = document.querySelector(headerId);

  if (!header) {
    console.error(`Elemento com ID "${headerId}" não encontrado.`);
    return;
  }

  const handleScroll = () => {
    const scrollY = window.scrollY;

    if (scrollY > scrollThreshold) {
      header.classList.add(fixedClass); // Adiciona a classe fixa
      document.body.style.paddingTop = `${header.offsetHeight}px`; // Compensa a altura do header fixo
    } else {
      header.classList.remove(fixedClass); // Remove a classe fixa
      document.body.style.paddingTop = "0px"; // Remove o espaço adicional
    }
  };

  // Adiciona o evento de rolagem
  window.addEventListener("scroll", handleScroll);

  // Inicializa estado correto no carregamento
  handleScroll();

  // Retorna uma função para remover o evento de rolagem (se necessário)
  return () => {
    window.removeEventListener("scroll", handleScroll);
  };
}

// Função para gerenciar seções ativas (baseado no useActive)
function setupActiveSection({ sectionsSelector, activeClass, offset }) {
  const sections = document.querySelectorAll(sectionsSelector);
  const navigationLinks = document.querySelectorAll(".navigation a");

  if (sections.length === 0 || navigationLinks.length === 0) {
    console.warn("Nenhuma seção ou links de navegação encontrados.");
    return;
  }

  const handleScroll = () => {
    const scrollY = window.scrollY;

    sections.forEach((section) => {
      const sectionTop = section.offsetTop - offset; // Considera o offset fornecido
      const sectionHeight = section.offsetHeight;

      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        // Ativa o link correspondente
        navigationLinks.forEach((link) => {
          link.classList.remove(activeClass); // Remove a classe de todos os links
          if (link.getAttribute("href").includes(section.id)) {
            link.classList.add(activeClass); // Adiciona a classe ao link ativo
          }
        });
      }
    });
  };

  // Adiciona o evento de rolagem
  window.addEventListener("scroll", handleScroll);

  // Inicializa estado correto no carregamento
  handleScroll();

  // Retorna uma função para remover o evento de rolagem (se necessário)
  return () => {
    window.removeEventListener("scroll", handleScroll);
  };
}

// Inicializa comportamento de rolagem para o cabeçalho
setupScrollHandler({
  headerId: ".main-header", // Elemento do cabeçalho
  fixedClass: "fixed-header", // Classe fixa a ser aplicada
  scrollThreshold: 120, // Ponto de rolagem para fixar o cabeçalho
});

// Inicializa comportamento para seções ativas
setupActiveSection({
  sectionsSelector: "section", // Seletor para as seções
  activeClass: "active", // Classe ativa a ser aplicada aos links
  offset: 100, // Offset para ativação
});
