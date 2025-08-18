# myHealth Summary Dashboard 

A responsive web app health dashboard that consolidates personal health data aligned to the International Patient Summary (IPS) standard.

<H2>mHealth Summary Page</H2>
<img src="assets/myhealth-summary.png" alt="myHealth Summary" width="400"><br>

<H2>About myHealth Dashboard</H2>
<img src="assets/about-myhealth-dashboard2.jpg" alt="About myHealth Dashboard" width="400">

<H2>The International Patient Summary (IPS)</H2>
<img src="assets/myhealth-ips-preview.png" alt="mHealth IPS dataset" width="400">

## Overview

**Problem**: Health data is scattered or siloed across systems (e.g., primary care EMRs, ambulatory CIS, regional CDRs), making it hard for patients and providers to get a consolidated single, clear view.

**Solution**: This PoC demonstrates health data can be standardized and presented in a clear dashboard using a small, fast tech stack.
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
:memo: Key insight: Disparate patient records consolidated in one standardized view<br>
:memo: Key insight: Complex medical data becomes easier to understand<br>
:memo: Key insight: Supports use case for on-demand access<br>

## Scope & Limitations

This is a **proof-of-concept** demonstrating core functionality:
- Not production-ready
- No authentication or user management
- Demo data only

## Quick Start
Clone the repo and run it locally using PHP’s built-in server, or import the repo into Replit and run it there using a PHP Web Server instance.
