#!/bin/bash

find -L . -type f -name "*.aspx" -print0 | while IFS= read -r -d '' FNAME; do
	echo ${FNAME%.aspx}.html
    mv -- "$FNAME" "${FNAME%.aspx}.html"
done