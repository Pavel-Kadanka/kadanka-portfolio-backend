#!/bin/bash

# Update package list and install libssl1.0.0
apt-get update && apt-get install -y libssl1.0.0

# Run the original build command
vercel build
