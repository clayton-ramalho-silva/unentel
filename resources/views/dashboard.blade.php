<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Governança | Engenharia de Software</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .section-content { display: none; animation: fadeIn 0.3s ease-in-out; }
        .section-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .sidebar-link.active { background: #3730a3; border-right: 4px solid #818cf8; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <div class="flex min-h-screen">
        <aside class="w-72 bg-indigo-950 text-white flex-shrink-0 hidden lg:flex flex-col sticky top-0 h-screen">
            <div class="p-6 border-b border-indigo-800">
                <h1 class="text-xl font-bold flex items-center gap-2">
                    <i data-lucide="shield-check"></i> Governança TI
                </h1>
                <p class="text-xs text-indigo-300 mt-1 uppercase tracking-widest font-semibold">Integrador Laravel-SAP</p>
            </div>
            <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                <button onclick="showTab('resumo')" class="sidebar-link w-full flex items-center gap-3 p-3 rounded-lg hover:bg-indigo-900 transition active" id="btn-resumo">
                    <i data-lucide="layout-dashboard"></i> Visão Geral & Baseline
                </button>
                <button onclick="showTab('semver')" class="sidebar-link w-full flex items-center gap-3 p-3 rounded-lg hover:bg-indigo-900 transition" id="btn-semver">
                    <i data-lucide="binary"></i> Versionamento SemVer
                </button>
                <button onclick="showTab('requisitos')" class="sidebar-link w-full flex items-center gap-3 p-3 rounded-lg hover:bg-indigo-900 transition" id="btn-requisitos">
                    <i data-lucide="list-checks"></i> Requisitos (F e NF)
                </button>
                <button onclick="showTab('gcs')" class="sidebar-link w-full flex items-center gap-3 p-3 rounded-lg hover:bg-indigo-900 transition" id="btn-gcs">
                    <i data-lucide="git-branch"></i> Gestão de Configuração
                </button>
                <button onclick="showTab('docs')" class="sidebar-link w-full flex items-center gap-3 p-3 rounded-lg hover:bg-indigo-900 transition" id="btn-docs">
                    <i data-lucide="file-text"></i> Padrões de Documentação
                </button>
                <button onclick="showTab('sap')" class="sidebar-link w-full flex items-center gap-3 p-3 rounded-lg hover:bg-indigo-900 transition" id="btn-sap">
                    <i data-lucide="database"></i> Integração & API SAP
                </button>
                <button onclick="showTab('ferramentas')" class="sidebar-link w-full flex items-center gap-3 p-3 rounded-lg hover:bg-indigo-900 transition" id="btn-ferramentas">
                    <i data-lucide="wrench"></i> Automação & Tools
                </button>
            </nav>
            <div class="p-4 border-t border-indigo-800 text-[10px] text-indigo-400">
                v1.0.0 Stable Baseline | REPO-ERP-ORCH-001
            </div>
        </aside>

        <main class="flex-1 p-4 lg:p-10">
            
            <section id="resumo" class="section-content active">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-indigo-950">Baseline de Configuração</h2>
                    <p class="text-slate-600">Marco de referência estável para os Itens de Configuração (ICS).</p>
                    <p class="text-slate-600">Adicionaei essa linha e vou comitar direto na produção.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                        <div class="text-indigo-600 mb-2"><i data-lucide="anchor"></i></div>
                        <h3 class="font-bold">Marco Zero (v1.0.0)</h3>
                        <p class="text-sm text-slate-500 mt-2">Estado atual revisto e aprovado pela CCA (Autoridade Controladora de Mudanças).</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                        <div class="text-emerald-600 mb-2"><i data-lucide="archive"></i></div>
                        <h3 class="font-bold">Repositório (RIC)</h3>
                        <p class="text-sm text-slate-500 mt-2">Armazenamento central de Itens de Configuração Baselined.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                        <div class="text-amber-600 mb-2"><i data-lucide="alert-circle"></i></div>
                        <h3 class="font-bold">Controle Formal</h3>
                        <p class="text-sm text-slate-500 mt-2">Qualquer modificação pós-baseline exige protocolo ECO.</p>
                    </div>
                </div>

                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-r-xl">
                    <h4 class="font-bold text-indigo-900 flex items-center gap-2 mb-2">
                        <i data-lucide="info"></i> Transição Informal → Formal
                    </h4>
                    <p class="text-sm text-indigo-800 leading-relaxed">
                        A fase de desenvolvimento inicial (0.y.z) encerra-se aqui. A coleta retrospectiva de e-mails e capturas de tela compõe o histórico que justifica a estabilidade desta versão 1.0.0.
                    </p>
                </div>
            </section>

            <section id="semver" class="section-content">
                <h2 class="text-3xl font-bold text-indigo-950 mb-6">Versionamento Semântico (SemVer 2.0.0)</h2>
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="p-6 bg-slate-50 border-b border-slate-200 flex justify-between items-center">
                        <span class="text-xl font-mono font-bold text-indigo-600">MAJOR . MINOR . PATCH</span>
                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-bold uppercase">Padrão de Indústria</span>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="flex gap-4">
                            <div class="w-24 h-24 bg-red-100 text-red-700 rounded-lg flex flex-col items-center justify-center flex-shrink-0">
                                <span class="text-2xl font-black">X</span>
                                <span class="text-[10px] uppercase font-bold">Major</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Mudanças Incompatíveis (Breaking Changes)</h4>
                                <p class="text-slate-600 text-sm">Incrementado quando há alterações que quebram a compatibilidade com a API anterior ou mudanças profundas no esquema SAP.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 border-t pt-6">
                            <div class="w-24 h-24 bg-blue-100 text-blue-700 rounded-lg flex flex-col items-center justify-center flex-shrink-0">
                                <span class="text-2xl font-black">Y</span>
                                <span class="text-[10px] uppercase font-bold">Minor</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Funcionalidades Novas (Compatíveis)</h4>
                                <p class="text-slate-600 text-sm">Incrementado quando novas funções são adicionadas (ex: novas telas, novos filtros) sem afetar o que já funcionava.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 border-t pt-6">
                            <div class="w-24 h-24 bg-emerald-100 text-emerald-700 rounded-lg flex flex-col items-center justify-center flex-shrink-0">
                                <span class="text-2xl font-black">Z</span>
                                <span class="text-[10px] uppercase font-bold">Patch</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Correções (Bug Fixes)</h4>
                                <p class="text-slate-600 text-sm">Incrementado apenas para correções internas, ajustes de bugs ou performance, sem novas funções.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="requisitos" class="section-content">
                <h2 class="text-3xl font-bold text-indigo-950 mb-6">Engenharia de Requisitos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                        <h3 class="text-indigo-800 font-bold text-lg mb-4 flex items-center gap-2">
                            <i data-lucide="settings-2"></i> Requisitos Funcionais
                        </h3>
                        <ul class="space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2"><i data-lucide="check-square" class="text-emerald-500 w-4"></i> Orquestração de dados entre Laravel e SAP.</li>
                            <li class="flex gap-2"><i data-lucide="check-square" class="text-emerald-500 w-4"></i> Interface Web para consulta dinâmica.</li>
                            <li class="flex gap-2"><i data-lucide="check-square" class="text-emerald-500 w-4"></i> Autenticação e controle de acesso de usuários.</li>
                            <li class="flex gap-2"><i data-lucide="check-square" class="text-emerald-500 w-4"></i> Sanitização de inputs antes do commit no banco SAP.</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                        <h3 class="text-indigo-800 font-bold text-lg mb-4 flex items-center gap-2">
                            <i data-lucide="zap"></i> Requisitos Não Funcionais
                        </h3>
                        <ul class="space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2"><i data-lucide="shield" class="text-amber-500 w-4"></i> Segurança: Criptografia de credenciais da API SAP.</li>
                            <li class="flex gap-2"><i data-lucide="gauge" class="text-amber-500 w-4"></i> Desempenho: Tempo de resposta da API < 500ms.</li>
                            <li class="flex gap-2"><i data-lucide="box" class="text-amber-500 w-4"></i> Plataforma: Execução estável em Ubuntu 24.04 (PHP 8.x).</li>
                            <li class="flex gap-2"><i data-lucide="refresh-cw" class="text-amber-500 w-4"></i> Escalabilidade: Capacidade de novos módulos via OData.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="gcs" class="section-content">
                <h2 class="text-3xl font-bold text-indigo-950 mb-6">Protocolo de Auditoria (GCS)</h2>
                <div class="bg-indigo-900 text-white p-8 rounded-xl shadow-lg mb-8">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                        <i data-lucide="clipboard-check"></i> Checklist de Liberação de Versão
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-3 p-4 bg-indigo-800 rounded-lg">
                            <p class="text-xs font-bold uppercase tracking-widest text-indigo-300">Auditoria de Mudança</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center gap-2 italic">A mudança na ECO foi realizada?</li>
                                <li class="flex items-center gap-2 italic">Houve Revisão Técnica Formal?</li>
                                <li class="flex items-center gap-2 italic">O ICS foi devidamente realçado?</li>
                            </ul>
                        </div>
                        <div class="space-y-3 p-4 bg-indigo-800 rounded-lg">
                            <p class="text-xs font-bold uppercase tracking-widest text-indigo-300">Auditoria de Configuração</p>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center gap-2 italic">Todos os ICS atualizados no repositório?</li>
                                <li class="flex items-center gap-2 italic">Os padrões de Engenharia foram seguidos?</li>
                                <li class="flex items-center gap-2 italic">Logs de integração OData anexados?</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-slate-200 bg-white p-5 rounded-lg">
                        <h4 class="font-bold flex items-center gap-2 mb-3"><i data-lucide="tag"></i> ECO (Engineering Change Order)</h4>
                        <p class="text-sm text-slate-600">Documento que autoriza legalmente qualquer mudança na baseline. Deve conter ID, Responsável e Aprovação CCA.</p>
                    </div>
                    <div class="border border-slate-200 bg-white p-5 rounded-lg">
                        <h4 class="font-bold flex items-center gap-2 mb-3"><i data-lucide="users"></i> CCA (Change Control Authority)</h4>
                        <p class="text-sm text-slate-600">Entidade responsável por revisar o impacto da mudança antes da autorização. Garante a integridade do sistema.</p>
                    </div>
                </div>
            </section>

            <section id="docs" class="section-content">
                <h2 class="text-3xl font-bold text-indigo-950 mb-6">Padrões de Documentação Técnica</h2>
                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                        <h3 class="font-bold text-indigo-800 mb-4 uppercase text-sm tracking-widest">README.md: O Cartão de Visita</h3>
                        <div class="bg-slate-900 text-slate-300 p-4 rounded-lg font-mono text-xs overflow-x-auto">
                            # Projeto: Integração Laravel-SAP<br>
                            ### 1. Objetivo: Camada de interface entre cliente e SAP via API.<br>
                            ### 2. Arquitetura: Framework Laravel / SAP Backend / PHP 8.x.<br>
                            ### 3. Setup: .env (Credenciais API), Composer Install, Migrations.<br>
                            ### 4. Execução: Instruções de build e targets de ambiente.
                        </div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                        <h3 class="font-bold text-indigo-800 mb-4 uppercase text-sm tracking-widest">CHANGELOG.md: Histórico Evolutivo</h3>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="p-3 bg-green-50 border border-green-200 rounded text-center">
                                <span class="block font-bold text-green-700">Adicionado</span>
                                <span class="text-[10px] text-green-600">Novas features</span>
                            </div>
                            <div class="p-3 bg-blue-50 border border-blue-200 rounded text-center">
                                <span class="block font-bold text-blue-700">Alterado</span>
                                <span class="text-[10px] text-blue-600">Mudanças em existentes</span>
                            </div>
                            <div class="p-3 bg-amber-50 border border-amber-200 rounded text-center">
                                <span class="block font-bold text-amber-700">Corrigido</span>
                                <span class="text-[10px] text-amber-600">Bugs resolvidos</span>
                            </div>
                            <div class="p-3 bg-red-50 border border-red-200 rounded text-center">
                                <span class="block font-bold text-red-700">Descontinuado</span>
                                <span class="text-[10px] text-red-600">Removidos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="sap" class="section-content">
                <h2 class="text-3xl font-bold text-indigo-950 mb-6">Controle de Interface & API SAP</h2>
                <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200">
                    <p class="mb-6 text-slate-600">A integridade do sistema depende da precisão da <strong>API Pública</strong> declarada. O Laravel atua como orquestrador, mas o SAP é o <em>Source of Truth</em>.</p>
                    
                    <div class="bg-slate-50 p-6 rounded-lg border border-slate-200 mb-6">
                        <h4 class="font-bold mb-4">Diretrizes de Interface</h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="bg-indigo-600 text-white p-1 rounded-full"><i data-lucide="check" size="12"></i></div>
                                <span class="text-sm"><strong>Contrato de Dados:</strong> Documentar tipos rigorosos (ex: CEP deve ser numérico, campos de data ISO-8601).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="bg-indigo-600 text-white p-1 rounded-full"><i data-lucide="check" size="12"></i></div>
                                <span class="text-sm"><strong>OData Integrity:</strong> Todas as chamadas devem retornar Status 200 OK ou erros tratados (4xx/5xx) antes da interface.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="bg-indigo-600 text-white p-1 rounded-full"><i data-lucide="check" size="12"></i></div>
                                <span class="text-sm"><strong>Isolamento:</strong> A lógica de negócio reside no Laravel; a persistência é domínio do SAP.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="ferramentas" class="section-content">
                <h2 class="text-3xl font-bold text-indigo-950 mb-6">Stack de Automação Técnica</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-6 bg-white border border-slate-200 rounded-xl hover:shadow-md transition">
                        <h4 class="font-bold flex items-center gap-2 mb-2"><i data-lucide="github"></i> Git/Tags</h4>
                        <p class="text-xs text-slate-500 italic">Marcação de releases e controle de branch main.</p>
                    </div>
                    <div class="p-6 bg-white border border-slate-200 rounded-xl hover:shadow-md transition">
                        <h4 class="font-bold flex items-center gap-2 mb-2"><i data-lucide="book-open"></i> Swagger</h4>
                        <p class="text-xs text-slate-500 italic">Visualização interativa da API Laravel-SAP.</p>
                    </div>
                    <div class="p-6 bg-white border border-slate-200 rounded-xl hover:shadow-md transition">
                        <h4 class="font-bold flex items-center gap-2 mb-2"><i data-lucide="bot"></i> Dependabot</h4>
                        <p class="text-xs text-slate-500 italic">Prevenção contra o "inferno de dependências".</p>
                    </div>
                    <div class="p-6 bg-white border border-slate-200 rounded-xl hover:shadow-md transition">
                        <h4 class="font-bold flex items-center gap-2 mb-2"><i data-lucide="container"></i> Docker</h4>
                        <p class="text-xs text-slate-500 italic">Padronização do ambiente de desenvolvimento local.</p>
                    </div>
                </div>
            </section>

        </main>
    </div>

    <script>
        lucide.createIcons();
        function showTab(tabId) {
            document.querySelectorAll('.section-content').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.sidebar-link').forEach(el => el.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
            document.getElementById('btn-' + tabId).classList.add('active');
        }
    </script>
</body>
</html>