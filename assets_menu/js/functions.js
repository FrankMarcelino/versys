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

// Obtém a data e hora atuais
const now = new Date();

// Formata o dia da semana
const diaDaSemana = now.toLocaleDateString("pt-BR", { weekday: "long" });

// Formata a data (dd/mm/aaaa)
const dataFormatada = now.toLocaleDateString("pt-BR", {
  day: "2-digit",
  month: "2-digit",
  year: "numeric",
});

// Formata a hora (hh:mm)
const horaFormatada = now.toLocaleTimeString("pt-BR", {
  hour: "2-digit",
  minute: "2-digit",
});

// Insere o dia da semana e a data no elemento correspondente
document.querySelector(".fa-calendar").parentElement.innerHTML = `
  <i class="fa fa-calendar" aria-hidden="true"></i> ${diaDaSemana}, ${dataFormatada}
`;

// Insere a hora no elemento correspondente
document.querySelector(".fa-clock-o").parentElement.innerHTML = `
  <i class="fa fa-clock-o" aria-hidden="true"></i> ${horaFormatada}
`;

function animateCounter() {
  // Seleciona todos os elementos com a classe count-text
  const counters = document.querySelectorAll(".count-text span");

  counters.forEach((counter) => {
    const target = parseInt(counter.textContent); // Número alvo
    let current = 0; // Valor inicial
    const increment = Math.ceil(target / 100); // Incremento calculado

    const updateCounter = () => {
      if (current < target) {
        current += increment; // Incrementa progressivamente
        counter.textContent = current > target ? target : current; // Atualiza o valor
        setTimeout(updateCounter, 30); // Define o intervalo de atualização
      }
    };

    updateCounter(); // Inicia a animação
  });
}

// Dispara a animação ao carregar a página
window.onload = animateCounter;

// abas do sobre a empresa
// Adiciona evento de clique aos botões de aba
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".tab-btn");
  const sections = document.querySelectorAll(".tabs-content .tab");

  // Função para remover a classe ativa de todos os botões e seções
  function removeActiveClasses() {
    tabs.forEach((tab) => tab.classList.remove("active-btn"));
    sections.forEach((section) =>
      section.classList.remove("active-tab", "fadeInUp")
    );
  }

  // Adicionar evento de clique a cada botão de aba
  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      removeActiveClasses();
      tab.classList.add("active-btn"); // Adiciona classe ativa ao botão
      sections[index]?.classList.add("active-tab", "fadeInUp"); // Adiciona classes à aba correspondente
    });
  });

  // Configuração inicial para ativar o primeiro botão e a primeira aba
  tabs[0]?.classList.add("active-btn");
  sections[0]?.classList.add("active-tab", "fadeInUp");
});
