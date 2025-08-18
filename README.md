# myHealth Summary Dashboard 

A responsive web app health dashboard that consolidates personal health data aligned to the International Patient Summary (IPS) standard.

<H2>mHealth Summary Page</H2>
<img src="assets/myhealth-summary.png" alt="myHealth Summary" width="400"><br>

<H2>About myHealth Dashboard</H2>
<img src="assets/about-myhealth-dashboard2.jpg" alt="About myHealth Dashboard" width="400">

<H2>The International Patient Summary (IPS)</H2>
<img src="assets/myhealth-ips-preview.png" alt="mHealth IPS dataset" width="400">

## Overview

**Problem**: Health data is fragmented across multiple systems—primary care EMRs, ambulatory CIS platforms, and regional CDRs—resulting in siloed data. This fragmentation often prevents patients and providers from accessing a single, comprehensive, and reliable view of health information.

**Solution**: This Proof of Concept (PoC) demonstrates that health data can be standardized, consolidated, and presented through a unified dashboard. Built on a lightweight, fast technology stack, the PoC provides a clear view of patient information that enables better clinical decisions, more timely interventions, and improved collaboration across the patient–provider ecosystems.
- **Feasibility** of IPS-aligned data display 
- **Simplification** of complex medical records for end users
- **Standards compliance** with HL7 FHIR/IPS for global interoperability

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
