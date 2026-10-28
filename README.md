# Life Beyond Epilepsy (LBE) — Web Platform

Official web platform for **Life Beyond Epilepsy (LBE)**, dedicated to epilepsy awareness, healthcare navigation, and children's empowerment in **Trans-Nzoia County, Kenya**.

---

## 💜 Core Principles & Non-Negotiables

* **Informational & Health Navigation Only:** Does not diagnose users, prescribe treatments, or replace professional medical care.
* **Non-Emergency Notification:** LBE channels (website and WhatsApp) are not 24/7 staffed helplines. Emergencies must be directed to **999 / 112** or the nearest county hospital.
* **Bilingual English & Kiswahili:** Full native support across all navigation and educational resources.
* **Data Protection:** Full compliance with the **Kenya Data Protection Act 2019 (ODPC)**.

---

## 🛠️ Technology Stack

* **Framework:** Laravel 12 (PHP 8.3+)
* **Styling & UI:** Tailwind CSS v4 + Vite
* **Database:** SQLite / MySQL / PostgreSQL ready
* **Localization:** Bilingual architecture (`lang/en` & `lang/sw`)
* **Testing:** PHPUnit / Pest Feature & Unit test suites

---

## 🚀 Quickstart & Local Development

```bash
# 1. Install dependencies
composer install
npm install

# 2. Environment Setup
cp .env.example .env
php artisan key:generate

# 3. Build front-end assets
npm run build

# 4. Run tests
php artisan test

# 5. Start development server
php artisan serve
```

---

## 📂 Phase 1 Pages Included

1. **Home (`/`)**: Mission, core CTAs, quick seizure first aid, pilot highlights, WhatsApp quick access.
2. **About LBE (`/about`)**: Mission, vision, core values, governance, and registration transparency.
3. **Epilepsy Awareness (`/awareness`)**: Seizure classifications, Kenyan cultural myth-busting, clinical first-aid protocol, emergency hospital triggers.
4. **Smart Health Navigator (`/navigator`)**: Trans-Nzoia healthcare directory (Kitale Referral, Kiminini, Cherangany, Endebess), clinical disclaimer, and voice-to-text architecture preview.
5. **Medical Support (`/medical-support`)**: Diagnostic referral pathways, EEG subsidization model, transparent eligibility criteria.
6. **Children's Empowerment (`/children`)**: School inclusion, teacher training, peer anti-bullying, and child safeguarding policies.
7. **Events & Campaigns (`/events`)**: Kitale outreach camps, teacher workshops, Purple Day Kenya.
8. **Partnerships (`/partnerships`)**: Hospital, clinician, school, and NGO partnership enquiry portal.
9. **Donate & Support (`/donate`)**: Financial transparency, verified donation methods, receipting accountability.
10. **Impact & Transparency (`/impact`)**: Verifiable pilot progress, zero fabricated metrics, beneficiary privacy.
11. **Get Involved (`/get-involved`)**: Volunteer registration form with Kenya DPA consent.
12. **Contact Us (`/contact`)**: Official email, phone, and WhatsApp desk with explicit business hours (Mon–Fri 8:30 AM–5:00 PM EAT).
13. **Privacy, Terms & Safety (`/privacy`)**: Kenya Data Protection Act 2019 compliance, medical disclaimer, terms of use, and safeguarding reporting routes.
