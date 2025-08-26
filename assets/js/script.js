/* Demo data: sample agents to render. In real site this comes from server. */
const AGENTS = [
  // type, displayName, agentCode, phoneE164, imageUrl (optional)
  { id: "a1", type: "HOME", displayName: "Home Agent 1", agentCode: "H-1001", phoneE164: "+919812345001", whatsapp: "", complain: "" },
  { id: "a2", type: "HOME", displayName: "Home Agent 2", agentCode: "H-1002", phoneE164: "+919812345002" },
  { id: "a3", type: "SERVICE", displayName: "Service Agent 1", agentCode: "S-2001", phoneE164: "+919812345101" },
  { id: "a4", type: "SERVICE", displayName: "Service Agent 2", agentCode: "S-2002", phoneE164: "+919812345102" },
  { id: "a5", type: "ADMIN", displayName: "Admin Agent", agentCode: "AD-3001", phoneE164: "+919812345201" },
  { id: "a6", type: "SUPER", displayName: "Super Agent", agentCode: "SP-4001", phoneE164: "+919812345301" },
  { id: "a7", type: "MASTER", displayName: "Master Agent", agentCode: "M-5001", phoneE164: "+919812345401" },
  // extra for demo
  { id: "a8", type: "HOME", displayName: "Home Agent 3", agentCode: "H-1003", phoneE164: "+919812345003" },
  { id: "a9", type: "MASTER", displayName: "Master Agent 2", agentCode: "M-5002", phoneE164: "+919812345402" }
];

/* Utilities */
function whatsappLinkFromPhone(phone){
  // remove non-digit and ensure country code present (demo expects +91)
  const digits = (phone || '').replace(/\D/g,'');
  return `https://wa.me/${digits}`;
}
function createAgentCard(a){
  const col = document.createElement('div');
  col.className = 'col-md-6 col-lg-4';

  const card = document.createElement('div');
  card.className = 'agent-card';

  const row = document.createElement('div');
  row.className = 'd-flex align-items-center';

  const avatar = document.createElement('div');
  avatar.className = 'me-3';
  avatar.innerHTML = `<div style="width:56px;height:56px;border-radius:10px;background:#eef2ff;display:flex;align-items:center;justify-content:center;font-weight:700;color:#3730a3">${a.displayName.split(' ')[0].slice(0,2)}</div>`;

  const body = document.createElement('div');
  body.style.flex = '1';
  body.innerHTML = `<div class="name">${a.displayName}</div>
                    <div class="agent-meta mt-1">ID: <strong>${a.agentCode}</strong> · ${a.phoneE164}</div>`;

  const actions = document.createElement('div');
  actions.className = 'agent-actions d-flex flex-column align-items-end ms-3';

  const wa = document.createElement('a');
  wa.className = 'btn btn-sm btn-success mb-2';
  wa.href = a.whatsapp || whatsappLinkFromPhone(a.phoneE164);
  wa.target = '_blank';
  wa.innerHTML = '<i class="fa fa-comments me-1"></i> WhatsApp';

  const complain = document.createElement('a');
  complain.className = 'btn btn-sm btn-outline-danger';
  complain.href = a.complain || whatsappLinkFromPhone(a.phoneE164);
  complain.target = '_blank';
  complain.innerHTML = '<i class="fa fa-exclamation-circle me-1"></i> Complain';

  actions.appendChild(wa);
  actions.appendChild(complain);

  row.appendChild(avatar);
  row.appendChild(body);
  row.appendChild(actions);
  card.appendChild(row);
  col.appendChild(card);
  return col;
}

/* Render functions */
function renderAgents(filterType = 'ALL', search = ''){
  const container = document.getElementById('agentsContainer');
  container.innerHTML = '';
  const q = (search || '').trim().toLowerCase();

  const filtered = AGENTS.filter(a => {
    if (filterType !== 'ALL' && a.type !== filterType) return false;
    if (!q) return true;
    return (a.displayName||'').toLowerCase().includes(q) || (a.agentCode||'').toLowerCase().includes(q) || (a.phoneE164||'').includes(q);
  });

  if (filtered.length === 0){
    container.innerHTML = '<div class="col-12"><div class="p-4 bg-white rounded text-center">No agents found.</div></div>';
    return;
  }
  filtered.forEach(a => container.appendChild(createAgentCard(a)));
}

/* Render counters */
function renderCounters(){
  const types = ['HOME','SERVICE','ADMIN','SUPER','MASTER'];
  types.forEach(t => {
    const el = document.getElementById('count-' + t);
    if (el) el.innerText = AGENTS.filter(a => a.type === t).length;
  });
}

/* Admin table render */
function renderAdminTable(){
  const tbody = document.getElementById('adminTableBody');
  if (!tbody) return;
  tbody.innerHTML = '';
  AGENTS.forEach((a, idx) => {
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td>${idx+1}</td>
      <td>${a.type}</td>
      <td>${a.displayName}</td>
      <td>${a.agentCode}</td>
      <td>${a.phoneE164}</td>
      <td><a class="btn btn-sm btn-success" href="${whatsappLinkFromPhone(a.phoneE164)}" target="_blank"><i class="fa fa-comments"></i></a></td>
      <td><a class="btn btn-sm btn-outline-danger" href="${whatsappLinkFromPhone(a.phoneE164)}" target="_blank"><i class="fa fa-flag"></i></a></td>
      <td>
        <button class="btn btn-sm btn-warning me-1" onclick="alert('Edit demo: ${a.displayName}')"><i class='fa fa-edit'></i></button>
        <button class="btn btn-sm btn-danger" onclick="alert('Delete demo: ${a.displayName}')"><i class='fa fa-trash'></i></button>
      </td>
    `;
    tbody.appendChild(tr);
  });
}

/* Events */
document.addEventListener('DOMContentLoaded', function(){
  renderCounters();
  renderAgents();

  // search
  const searchInput = document.getElementById('searchInput');
  const searchBtn = document.getElementById('searchBtn');
  searchBtn.addEventListener('click', () => renderAgents(currentFilter, searchInput.value));
  searchInput.addEventListener('keyup', (e) => {
    if (e.key === 'Enter') renderAgents(currentFilter, searchInput.value);
  });

  // filter buttons
  const filterButtons = document.querySelectorAll('.type-filter');
  filterButtons.forEach(btn => {
    btn.addEventListener('click', function(){
      filterButtons.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      currentFilter = this.dataset.type || 'ALL';
      renderAgents(currentFilter, searchInput.value);
    });
  });

  // admin table
  renderAdminTable();
});

/* default filter */
let currentFilter = 'ALL';
