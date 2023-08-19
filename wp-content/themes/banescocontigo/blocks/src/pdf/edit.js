import { useBlockProps, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	TextControl,
} from '@wordpress/components'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { url } = attributes
	
	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Library PDF File'} style={{ minHeight: "auto" }}>
				<div className="settings">
					<div className="row">
						<TextControl
							label="File URL"
							value={url}
							className="input"
							onChange={
								(value) => setAttributes({ url: value })
							}
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
