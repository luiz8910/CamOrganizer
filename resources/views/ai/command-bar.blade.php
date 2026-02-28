{{-- AI Command Bar - Assistente IA --}}
<div class="container-fixed py-5" style="max-width: 900px; margin: 0 auto;">
    <div class="card shadow-sm" style="border-radius: 16px; overflow: hidden;">

        {{-- Header --}}
        <div class="card-header py-4 px-6" style="background: linear-gradient(135deg, #1b84ff 0%, #6f42c1 100%); border: none;">
            <h3 class="card-title text-white mb-0" style="font-size: 1.2rem; font-weight: 600;">
                <i class="ki-filled ki-message-programming text-white me-2" style="font-size: 1.4rem;"></i>
                Assistente IA — JFTech
            </h3>
            <p class="mb-0 mt-1" style="font-size: 0.85rem; color: rgba(255,255,255,0.95); text-shadow: 0 1px 2px rgba(0,0,0,0.15);">
                Digite um comando em português para gerenciar clientes e equipamentos.
            </p>
        </div>

        {{-- Body --}}
        <div class="card-body p-6">

            {{-- Input Area --}}
            <div id="ai-input-area">
                <div style="position: relative;">
                    <textarea
                        id="ai-input"
                        rows="4"
                        placeholder="Ex: Cadastre o cliente Fulano Tintas, CNPJ 12.345.678/0001-99, telefone (11) 99999-0000, endereço Rua da Paz 100, São Paulo SP..."
                        style="
                            width: 100%;
                            border: 2px solid #e1e3ea;
                            border-radius: 14px;
                            padding: 16px 20px;
                            font-size: 0.95rem;
                            line-height: 1.5;
                            resize: vertical;
                            min-height: 100px;
                            outline: none;
                            transition: border-color 0.2s;
                            font-family: 'Inter', sans-serif;
                            background: #f9fafb;
                            color: #1f2937;
                        "
                        onfocus="this.style.borderColor='#1b84ff'; this.style.background='#fff';"
                        onblur="this.style.borderColor='#e1e3ea'; this.style.background='#f9fafb';"
                    ></textarea>
                </div>

                {{-- Buttons --}}
                <div style="display: flex; align-items: center; gap: 12px; margin-top: 16px; flex-wrap: wrap;">
                    <button
                        id="btn-plan"
                        type="button"
                        class="btn btn-primary"
                        style="display: inline-flex; align-items: center; gap: 8px; border-radius: 10px; padding: 10px 24px; font-weight: 600; font-size: 0.9rem;"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink:0;"><path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/></svg>
                        Pedir à IA
                    </button>

                    <button
                        id="btn-execute"
                        type="button"
                        class="btn btn-success"
                        style="display: inline-flex; align-items: center; gap: 8px; border-radius: 10px; padding: 10px 24px; font-weight: 600; font-size: 0.9rem;"
                        disabled
                    >
                        <i class="ki-filled ki-check-circle"></i>
                        Confirmar execução
                    </button>

                    <button
                        id="btn-clear"
                        type="button"
                        class="btn btn-light"
                        style="display: inline-flex; align-items: center; gap: 8px; border-radius: 10px; padding: 10px 24px; font-weight: 500; font-size: 0.9rem;"
                    >
                        <i class="ki-filled ki-trash"></i>
                        Limpar
                    </button>
                </div>
            </div>

            {{-- Loading --}}
            <div id="ai-loading" style="display: none;" class="text-center py-6">
                <div class="spinner-border text-primary" role="status" style="width: 2.5rem; height: 2.5rem;">
                    <span class="visually-hidden">Carregando...</span>
                </div>
                <p class="text-muted mt-3" style="font-size: 0.9rem;">Processando com a IA...</p>
            </div>

            {{-- Preview Area --}}
            <div id="ai-preview-area" style="display: none;" class="mt-5">
                <div style="border-left: 4px solid #1b84ff; padding-left: 16px;">
                    <h5 style="font-size: 0.95rem; font-weight: 600; color: #1b84ff; margin-bottom: 8px;">
                        <i class="ki-filled ki-eye me-1"></i> Preview do Plano
                    </h5>
                    <p id="ai-preview-text" style="font-size: 0.9rem; color: #374151; margin-bottom: 0;"></p>
                </div>

                {{-- Needs Input Message --}}
                <div id="ai-needs-input" style="display: none;" class="mt-3">
                    <div class="alert" style="background: #fff8e6; border: 1px solid #ffc107; border-radius: 10px; padding: 12px 16px;">
                        <i class="ki-filled ki-information-3 text-warning me-1"></i>
                        <span id="ai-needs-input-msg" style="font-size: 0.9rem;"></span>
                    </div>
                    <div id="ai-options-list" class="mt-2"></div>
                </div>

                {{-- JSON Plan --}}
                <details class="mt-4">
                    <summary style="cursor: pointer; font-size: 0.85rem; color: #6b7280; font-weight: 500;">
                        Ver JSON do plano
                    </summary>
                    <pre id="ai-plan-json"
                         style="
                            margin-top: 8px;
                            background: #1e293b;
                            color: #e2e8f0;
                            padding: 16px;
                            border-radius: 10px;
                            font-size: 0.8rem;
                            overflow-x: auto;
                            max-height: 300px;
                         "
                    ></pre>
                </details>
            </div>

            {{-- Result Area --}}
            <div id="ai-result-area" style="display: none;" class="mt-5">
                <div style="border-left: 4px solid #17c653; padding-left: 16px;">
                    <h5 style="font-size: 0.95rem; font-weight: 600; color: #17c653; margin-bottom: 8px;">
                        <i class="ki-filled ki-check-circle me-1"></i> Resultado da Execução
                    </h5>
                    <p id="ai-result-msg" style="font-size: 0.9rem; color: #374151; margin-bottom: 0;"></p>
                </div>

                <div id="ai-result-details" class="mt-3"></div>

                <details class="mt-4">
                    <summary style="cursor: pointer; font-size: 0.85rem; color: #6b7280; font-weight: 500;">
                        Ver JSON do resultado
                    </summary>
                    <pre id="ai-result-json"
                         style="
                            margin-top: 8px;
                            background: #1e293b;
                            color: #e2e8f0;
                            padding: 16px;
                            border-radius: 10px;
                            font-size: 0.8rem;
                            overflow-x: auto;
                            max-height: 300px;
                         "
                    ></pre>
                </details>
            </div>

        </div>{{-- end card-body --}}
    </div>{{-- end card --}}
</div>

{{-- Modal para dados aninhados (network, access, wifi) --}}
<div id="ai-detail-modal" style="display:none; position:fixed; inset:0; z-index:9999; background:rgba(0,0,0,0.5); align-items:center; justify-content:center;">
    <div style="background:#fff; border-radius:16px; max-width:600px; width:92%; max-height:80vh; overflow-y:auto; box-shadow:0 25px 50px rgba(0,0,0,0.25); margin:auto; position:relative; top:50%; transform:translateY(-50%);">
        <div id="ai-modal-header" style="display:flex; align-items:center; justify-content:space-between; padding:16px 24px; border-bottom:1px solid #e5e7eb; background:#f8fafc; border-radius:16px 16px 0 0;">
            <h4 id="ai-modal-title" style="margin:0; font-size:1rem; font-weight:600; color:#1f2937;"></h4>
            <button id="ai-modal-close" type="button" style="background:none; border:none; cursor:pointer; padding:4px; line-height:1; font-size:1.3rem; color:#6b7280;">&times;</button>
        </div>
        <div id="ai-modal-body" style="padding:20px 24px;"></div>
    </div>
</div>

<script>
(function() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const btnPlan    = document.getElementById('btn-plan');
    const btnExec    = document.getElementById('btn-execute');
    const btnClear   = document.getElementById('btn-clear');
    const inputEl    = document.getElementById('ai-input');
    const loadingEl  = document.getElementById('ai-loading');

    const previewArea    = document.getElementById('ai-preview-area');
    const previewText    = document.getElementById('ai-preview-text');
    const planJson       = document.getElementById('ai-plan-json');
    const needsInputEl   = document.getElementById('ai-needs-input');
    const needsInputMsg  = document.getElementById('ai-needs-input-msg');
    const optionsList    = document.getElementById('ai-options-list');

    const resultArea     = document.getElementById('ai-result-area');
    const resultMsg      = document.getElementById('ai-result-msg');
    const resultDetails  = document.getElementById('ai-result-details');
    const resultJson     = document.getElementById('ai-result-json');

    let lastPlan = null;
    let modalIdCounter = 0;

    const READ_ACTIONS = ['customer.show', 'customer.list', 'equipment.show', 'equipment.list'];

    const FIELD_LABELS = {
        id: 'ID', external_id: 'ID Externo', company_name: 'Empresa', phone: 'Telefone',
        email: 'E-mail', cnpj: 'CNPJ', address: 'Endereço', number: 'Número',
        city: 'Cidade', state: 'Estado', zip_code: 'CEP', customer_id: 'ID Cliente',
        device_id: 'Dispositivo', brand: 'Marca', model: 'Modelo', serial: 'Serial',
        status: 'Status', port: 'Porta', ddns: 'DDNS', access_ip: 'IP Acesso',
        hd_brand: 'Marca HD', storage_capacity: 'Capacidade', installation_location: 'Local',
        description: 'Descrição', created_at: 'Criado em', updated_at: 'Atualizado em',
        mac: 'MAC', ip: 'IP', mask: 'Máscara', gateway: 'Gateway',
        username: 'Usuário', password: 'Senha', group: 'Grupo', ssid: 'SSID',
        equip_id: 'ID Equip.', deleted_at: 'Excluído em'
    };

    const SECTION_LABELS = {
        network: 'Rede', access: 'Usuários de Acesso', wifi: 'WiFi'
    };

    const DEVICE_NAMES = { 1: 'DVR', 2: 'Câmera', 3: 'Roteador' };

    const HIDDEN_COLUMNS = ['deleted_at', 'created_at', 'updated_at', 'equip_id', 'customer_id', 'id'];

    function isNestedData(val) {
        return val !== null && typeof val === 'object';
    }

    function renderModalContent(key, val) {
        if (val === null || val === undefined) return '<p style="color:#9ca3af;">Sem dados.</p>';

        var items = Array.isArray(val) ? val : [val];
        if (items.length === 0) return '<p style="color:#9ca3af;">Sem dados.</p>';

        var html = '';
        items.forEach(function(item, idx) {
            if (items.length > 1) {
                html += '<h5 style="font-size:0.85rem; font-weight:600; color:#6366f1; margin:' + (idx > 0 ? '16px' : '0') + ' 0 8px;">' + (SECTION_LABELS[key] || key) + ' #' + (idx + 1) + '</h5>';
            }
            html += '<div style="background:#f9fafb; border:1px solid #e5e7eb; border-radius:10px; padding:12px 16px; margin-bottom:8px;">';
            Object.keys(item).forEach(function(field) {
                if (HIDDEN_COLUMNS.indexOf(field) !== -1) return;
                var v = item[field];
                if (v === null || v === undefined) v = '—';
                var label = FIELD_LABELS[field] || field;
                var isPassword = field === 'password';
                html += '<div style="display:flex; align-items:center; justify-content:space-between; padding:6px 0; border-bottom:1px solid #f3f4f6;">';
                html += '<span style="font-weight:500; color:#4b5563; font-size:0.85rem;">' + label + '</span>';
                if (isPassword && v !== '—') {
                    var pwId = 'pw-' + (++modalIdCounter);
                    html += '<span style="display:flex; align-items:center; gap:8px;">';
                    html += '<code id="' + pwId + '" style="background:#e0e7ff; color:#3730a3; padding:3px 10px; border-radius:6px; font-size:0.85rem;">' + escapeHtml(String(v)) + '</code>';
                    html += '<button type="button" onclick="copyPassword(\'' + pwId + '\')" style="background:#6366f1; color:#fff; border:none; border-radius:6px; padding:4px 10px; font-size:0.75rem; cursor:pointer; white-space:nowrap;" title="Copiar senha">Copiar</button>';
                    html += '</span>';
                } else {
                    html += '<span style="color:#1f2937; font-size:0.85rem;">' + escapeHtml(String(v)) + '</span>';
                }
                html += '</div>';
            });
            html += '</div>';
        });
        return html;
    }

    function escapeHtml(text) {
        var div = document.createElement('div');
        div.appendChild(document.createTextNode(text));
        return div.innerHTML;
    }

    window.copyPassword = function(elementId) {
        var el = document.getElementById(elementId);
        if (!el) return;
        var text = el.textContent;
        navigator.clipboard.writeText(text).then(function() {
            var btn = el.nextElementSibling;
            if (btn) {
                var orig = btn.textContent;
                btn.textContent = 'Copiado!';
                btn.style.background = '#17c653';
                setTimeout(function() { btn.textContent = orig; btn.style.background = '#6366f1'; }, 1500);
            }
        });
    };

    window.openDetailModal = function(dataAttr, title) {
        var data = JSON.parse(decodeURIComponent(dataAttr));
        var key = title.toLowerCase().replace(/\s.*/,'');
        document.getElementById('ai-modal-title').textContent = title;
        document.getElementById('ai-modal-body').innerHTML = renderModalContent(key, data);
        var modal = document.getElementById('ai-detail-modal');
        modal.style.display = 'flex';
    };

    document.getElementById('ai-modal-close').addEventListener('click', function() {
        document.getElementById('ai-detail-modal').style.display = 'none';
    });
    document.getElementById('ai-detail-modal').addEventListener('click', function(e) {
        if (e.target === this) this.style.display = 'none';
    });

    function isReadOnlyPlan(plan) {
        if (!plan || !plan.commands || plan.commands.length === 0) return false;
        return plan.commands.every(function(c) { return READ_ACTIONS.indexOf(c.action) !== -1; });
    }

    function buildTable(rows) {
        if (!rows || rows.length === 0) return '<p style="color:#6b7280; font-size:0.9rem;">Nenhum registro encontrado.</p>';

        // Determinar colunas: separar simples vs. aninhadas
        var allKeys = Object.keys(rows[0]);
        var simpleKeys = [];
        var nestedKeys = [];
        allKeys.forEach(function(k) {
            if (k === 'deleted_at') return;
            // Verificar se ALGUMA row tem dados aninhados neste key
            var hasNested = rows.some(function(row) { return isNestedData(row[k]); });
            if (hasNested) {
                nestedKeys.push(k);
            } else {
                simpleKeys.push(k);
            }
        });

        var displayKeys = simpleKeys.concat(nestedKeys);

        var html = '<div style="overflow-x:auto;"><table style="width:100%; border-collapse:collapse; font-size:0.85rem; margin-top:8px;">';
        html += '<thead><tr>';
        displayKeys.forEach(function(k) {
            var label = FIELD_LABELS[k] || k;
            html += '<th style="padding:8px 12px; background:#f1f5f9; border:1px solid #e2e8f0; text-align:left; font-weight:600; white-space:nowrap;">' + label + '</th>';
        });
        html += '</tr></thead><tbody>';
        rows.forEach(function(row, i) {
            var bg = i % 2 === 0 ? '#fff' : '#f9fafb';
            html += '<tr style="background:' + bg + ';">';
            displayKeys.forEach(function(k) {
                var val = row[k];
                html += '<td style="padding:8px 12px; border:1px solid #e2e8f0; white-space:nowrap;">';
                if (isNestedData(val)) {
                    var hasData = Array.isArray(val) ? val.length > 0 : Object.keys(val).length > 0;
                    if (hasData) {
                        var encoded = encodeURIComponent(JSON.stringify(val));
                        var label = SECTION_LABELS[k] || k;
                        html += '<button type="button" onclick="openDetailModal(\'' + encoded + '\', \'' + escapeHtml(label) + '\')" ';
                        html += 'style="background:#e0e7ff; color:#4338ca; border:1px solid #c7d2fe; border-radius:8px; padding:4px 12px; font-size:0.8rem; cursor:pointer; font-weight:500;">';
                        html += '<i class="ki-filled ki-eye" style="font-size:0.75rem; margin-right:4px;"></i>Ver ' + label;
                        html += '</button>';
                    } else {
                        html += '<span style="color:#9ca3af;">—</span>';
                    }
                } else {
                    if (val === null || val === undefined) val = '';
                    if (k === 'device_id') val = DEVICE_NAMES[val] || val;
                    html += escapeHtml(String(val));
                }
                html += '</td>';
            });
            html += '</tr>';
        });
        html += '</tbody></table></div>';
        return html;
    }

    function showLoading(show) {
        loadingEl.style.display = show ? 'block' : 'none';
        btnPlan.disabled = show;
    }

    function resetUI() {
        previewArea.style.display = 'none';
        resultArea.style.display  = 'none';
        needsInputEl.style.display = 'none';
        optionsList.innerHTML = '';
        resultDetails.innerHTML = '';
        btnExec.disabled = true;
        lastPlan = null;
    }

    // =====================
    // Pedir à IA
    // =====================
    btnPlan.addEventListener('click', async function() {
        const text = inputEl.value.trim();
        if (!text) {
            alert('Digite um comando para a IA.');
            return;
        }

        resetUI();
        showLoading(true);

        try {
            const resp = await fetch("{{ route('ai.plan') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({ text: text }),
            });

            const data = await resp.json();
            showLoading(false);

            if (!resp.ok) {
                let errMsg = data.message || 'Erro ao processar a solicitação.';
                if (data.errors) {
                    errMsg += '\n' + Object.values(data.errors).flat().join('\n');
                }
                alert(errMsg);
                return;
            }

            lastPlan = data;
            previewText.textContent = data.preview || '';
            planJson.textContent = JSON.stringify(data, null, 2);
            previewArea.style.display = 'block';

            if (data.status === 'ok' && data.commands && data.commands.length > 0) {
                // Se é consulta (read), executar automaticamente
                if (isReadOnlyPlan(data)) {
                    doExecute();
                    return;
                }
                btnExec.disabled = false;
            }

            if (data.status === 'needs_input') {
                needsInputMsg.textContent = data.message || 'A IA precisa de mais informações.';
                needsInputEl.style.display = 'block';

                if (data.options && data.options.length > 0) {
                    optionsList.innerHTML = data.options.map(function(opt) {
                        return '<span class="badge badge-light-primary me-2 mb-2" style="font-size: 0.85rem; padding: 6px 12px; cursor: pointer; border-radius: 8px;" data-option-id="' + opt.id + '">' +
                               opt.label +
                               '</span>';
                    }).join('');
                }
            }

            if (data.status === 'error') {
                needsInputMsg.textContent = data.message || 'Erro ao planejar.';
                needsInputEl.style.display = 'block';
            }

        } catch (err) {
            showLoading(false);
            console.error(err);
            alert('Erro de comunicação com o servidor.');
        }
    });

    // =====================
    // Confirmar execução
    // =====================
    async function doExecute() {
        if (!lastPlan || lastPlan.status !== 'ok') return;

        btnExec.disabled = true;
        showLoading(true);

        try {
            const resp = await fetch("{{ route('ai.execute') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({ plan: lastPlan }),
            });

            const data = await resp.json();
            showLoading(false);

            resultMsg.textContent = data.message || '';
            resultJson.textContent = JSON.stringify(data, null, 2);

            // Render result details
            let html = '';
            if (data.results && data.results.length > 0) {
                data.results.forEach(function(r) {
                    const isOk = r.status === 'ok';
                    const isTable = r.type === 'table' && Array.isArray(r.data);

                    if (isTable && isOk) {
                        // Render as table for read actions
                        html += buildTable(r.data);
                    } else {
                        const color = isOk ? '#17c653' : '#f8285a';
                        const icon  = isOk ? 'ki-check-circle' : 'ki-cross-circle';
                        html += '<div style="border: 1px solid ' + (isOk ? '#d1fae5' : '#fee2e2') + '; border-radius: 10px; padding: 12px 16px; margin-bottom: 8px; background: ' + (isOk ? '#f0fdf4' : '#fef2f2') + ';">';
                        html += '<i class="ki-filled ' + icon + '" style="color: ' + color + '; margin-right: 8px;"></i>';
                        html += '<strong>' + r.action + '</strong> — ';
                        html += isOk ? 'Sucesso' : ('Erro: ' + (r.errors && r.errors._message ? r.errors._message : JSON.stringify(r.errors)));
                        html += '</div>';
                    }
                });
            }
            resultDetails.innerHTML = html;
            resultArea.style.display = 'block';

        } catch (err) {
            showLoading(false);
            console.error(err);
            alert('Erro de comunicação com o servidor.');
        }
    }

    btnExec.addEventListener('click', function() {
        doExecute();
    });

    // =====================
    // Limpar
    // =====================
    btnClear.addEventListener('click', function() {
        inputEl.value = '';
        resetUI();
    });

    // Enter+Ctrl para enviar
    inputEl.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && (e.ctrlKey || e.metaKey)) {
            e.preventDefault();
            btnPlan.click();
        }
    });
})();
</script>
