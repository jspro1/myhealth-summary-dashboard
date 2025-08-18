# myHealth Summary 

A responsive web app health dashboard that consolidates personal health data aligned to the International Patient Summary (IPS) standard.

## myHealth Summary - Dashboard
<img src="assets/myhealth-summary.png" alt="myHealth Summary" width="400"><br>

## myHealth Summary - About
<img src="assets/about-myhealth-dashboard2.jpg" alt="About myHealth Dashboard" width="400">

## The International Patient Summary (IPS)
<img src="assets/myhealth-ips-preview.png" alt="mHealth IPS dataset" width="400">

<center>
<a href="https://international-patient-summary.net/" target="_blank"><img src="https://img.shields.io/badge/Standard-IPS-blue" alt="Standard IPS"></a>
</center>

## myHealth Summary - Overview

**Problem**: Health data is fragmented across multiple systems—primary care EMRs, ambulatory CIS platforms, and regional CDRs—resulting in siloed data. This fragmentation often prevents patients and providers from accessing a single, comprehensive, and reliable view of the patient summary.

**Solution**: myHealth Summary Proof of Concept (PoC) demonstrates that health data can be standardized, consolidated, and presented through a unified dashboard. Built on a lightweight, fast technology stack, the PoC provides a clear view of patient information, enabling better support for health-related decisions, more timely interventions, and improved collaboration across patient–provider ecosystems.
- **Feasibility** of IPS-aligned data display 
- **Simplification** of complex medical records for end users
- **Standards compliance** with HL7 FHIR/IPS concepts for global interoperability
- **On-demand access** enables patients to quickly search and retrieve relevant personal health information
- **Proactive engagement** empowers patients to monitor their own health with clear, actionable data and insights

## Implementation

**Tech Stack**: PHP, HTML/CSS, JSON, JSON-Schema, HL7 FHIR/IPS concepts

**Architecture**: Lightweight web app that reads IPS-formatted JSON data and displays a summary view

**Data**: Uses demo data with sample IPS record parsing 

## Standards Compliance

- **IPS/FHIR alignment** for global interoperability
- **Privacy-focused** with anonymized demo data
- **Standardized format** enables cross-system compatibility

## Results & Learnings

:white_check_mark: Successfully loads and displays sample patient summary  
:white_check_mark: Validates IPS standard implementation approach  
:memo: Key insight: Disparate patient data consolidated in one standardized view<br>
:memo: Key insight: Complex medical data becomes easier to understand<br>
:memo: Key insight: Supports use case for on-demand access for the patient summary<br>

## Scope & Limitations

This is a **proof-of-concept** demonstrating core functionality:
- Not production-ready
- No authentication or user management
- Demo data only

## Quick Start
Clone the repo and run it locally using PHP’s built-in server, or import the repo into Replit and run it there using a PHP Web Server instance.
